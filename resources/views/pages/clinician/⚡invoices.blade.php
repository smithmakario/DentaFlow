<?php

use App\Models\Invoice;
use App\Models\Receipt;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::clinician')]
    class extends Component
    {
        use Interactions;

        public $viewModal = false;

        public $selectedInvoice;

        public $paymentModal = false;

        public $paymentAmount = '';

        public $paymentMethod = 'cash';

        public $paymentReference = '';

        public $paidAt = '';

        public function mount()
        {
            $this->paidAt = now()->format('Y-m-d');
        }

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'invoice_number', 'label' => 'Invoice #'],
                    ['index' => 'patient', 'label' => 'Patient'],
                    ['index' => 'appointment', 'label' => 'Appointment'],
                    ['index' => 'total', 'label' => 'Amount'],
                    ['index' => 'status', 'label' => 'Status'],
                    ['index' => 'receipts_count', 'label' => 'Receipts'],
                    ['index' => 'issued_at', 'label' => 'Issued'],
                    ['index' => 'action', 'label' => 'Action'],
                ],
                'rows' => Invoice::whereHas('appointment', fn($q) => $q->where('clinician_id', auth()->id()))
                    ->with(['appointment.patient', 'receipts'])
                    ->latest()
                    ->get(),
            ];
        }

        public function viewInvoice($id)
        {
            $this->selectedInvoice = Invoice::with(['appointment.patient', 'items.treatment', 'receipts'])
                ->findOrFail($id);
            $this->viewModal = true;
        }

        public function closeViewModal()
        {
            $this->viewModal = false;
            $this->selectedInvoice = null;
        }

        public function openPaymentModal($id)
        {
            $this->selectedInvoice = Invoice::with('receipts')->findOrFail($id);
            $remaining = $this->selectedInvoice->total - $this->selectedInvoice->receipts->sum('amount_paid');
            $this->paymentAmount = (string) $remaining;
            $this->paymentMethod = 'cash';
            $this->paymentReference = '';
            $this->paidAt = now()->format('Y-m-d');
            $this->paymentModal = true;
        }

        public function closePaymentModal()
        {
            $this->paymentModal = false;
            $this->selectedInvoice = null;
            $this->paymentAmount = '';
            $this->paymentMethod = 'cash';
            $this->paymentReference = '';
        }

        public function recordPayment()
        {
            $this->validate([
                'paymentAmount' => 'required|numeric|min:0.01',
                'paymentMethod' => 'required',
                'paidAt' => 'required|date',
            ]);

            $remaining = $this->selectedInvoice->total - $this->selectedInvoice->receipts->sum('amount_paid');
            $amount = (float) $this->paymentAmount;

            if ($amount > $remaining) {
                $this->dialog()->error('Amount exceeds remaining balance of ₦' . number_format($remaining, 2))->send();
                return;
            }

            $lastReceipt = Receipt::latest('id')->first();
            $nextNumber = $lastReceipt ? ((int) substr($lastReceipt->receipt_number, 4)) + 1 : 1;

            Receipt::create([
                'invoice_id' => $this->selectedInvoice->id,
                'receipt_number' => 'RCT-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT),
                'amount_paid' => $amount,
                'payment_method' => $this->paymentMethod,
                'payment_reference' => $this->paymentReference ?: null,
                'paid_at' => Carbon::parse($this->paidAt),
                'notes' => null,
            ]);

            $totalPaid = $this->selectedInvoice->receipts->sum('amount_paid') + $amount;
            $newStatus = $totalPaid >= $this->selectedInvoice->total ? 'paid' : 'partial';
            $this->selectedInvoice->update(['status' => $newStatus]);

            $this->closePaymentModal();
            $this->toast()->success('Payment recorded')->send();
        }

        public function markAsSent($id)
        {
            Invoice::where('id', $id)->where('status', 'draft')->update(['status' => 'sent']);
            $this->toast()->success('Invoice marked as sent')->send();
        }

        public function cancelInvoice($id)
        {
            $this->dialog()->confirm('Cancel invoice?', 'This will void the invoice.')
                ->confirm('Cancel', 'red', 'confirmCancelInvoice')
                ->cancel()
                ->send();
            $this->editingInvoiceId = $id;
        }

        public function confirmCancelInvoice()
        {
            Invoice::where('id', $this->editingInvoiceId)->whereIn('status', ['draft', 'sent'])->update(['status' => 'cancelled']);
            $this->editingInvoiceId = null;
            $this->toast()->success('Invoice cancelled')->send();
        }

        public function getStatusColorProperty()
        {
            return fn($status) => match ($status) {
                'paid' => 'green',
                'partial' => 'yellow',
                'sent' => 'blue',
                'draft' => 'zinc',
                'cancelled' => 'red',
                default => 'zinc',
            };
        }
    };
?>

<div>
    <x-card>
        <x-slot:header>
            Invoices
        </x-slot:header>
        <x-table :$headers :$rows>
            @interact('column_invoice_number', $row)
            <x-badge :text="$row['invoice_number']" color="zinc" />
            @endinteract

            @interact('column_patient', $row)
            <span>{{ $row['appointment']['patient']['first_name'] ?? '' }} {{ $row['appointment']['patient']['last_name'] ?? '—' }}</span>
            @endinteract

            @interact('column_appointment', $row)
            <span>{{ $row['appointment']['title'] ?? '—' }}</span>
            @endinteract

            @interact('column_total', $row)
            <span class="font-mono font-semibold">₦{{ number_format($row['total'], 2) }}</span>
            @endinteract

            @interact('column_status', $row)
            @php $color = $this->statusColor($row['status']); @endphp
            <x-badge :text="ucfirst($row['status'])" :color="$color" light />
            @endinteract

            @interact('column_receipts_count', $row)
            <span>{{ $row['receipts'] ? $row['receipts']->count() : '—' }}</span>
            @endinteract

            @interact('column_issued_at', $row)
            <span>{{ $row['issued_at'] ? \Illuminate\Support\Carbon::parse($row['issued_at'])->format('M d, Y') : '—' }}</span>
            @endinteract

            @interact('column_action', $row)
            <div class="flex items-center gap-1">
                <x-button icon="eye" xs wire:click="viewInvoice({{ $row->id }})" />
                @if(in_array($row['status'], ['draft', 'sent', 'partial']))
                    <x-button icon="banknotes" xs wire:click="openPaymentModal({{ $row->id }})" />
                @endif
            </div>
            @endinteract
        </x-table>
    </x-card>

    <x-modal title="Invoice Details" wire="viewModal" x-on:close="$wire.closeViewModal()">
        @if($selectedInvoice)
            <div class="space-y-4">
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <x-avatar lg />
                    <div>
                        <p class="text-lg font-bold">{{ $selectedInvoice->appointment->patient->first_name }} {{ $selectedInvoice->appointment->patient->last_name }}</p>
                        <p class="text-sm text-gray-500">{{ $selectedInvoice->appointment->patient->email }}</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <x-badge :text="$selectedInvoice->invoice_number" color="zinc" />
                    @php $c = $this->statusColor($selectedInvoice->status); @endphp
                    <x-badge :text="ucfirst($selectedInvoice->status)" :color="$c" light />
                </div>

                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b text-left text-gray-500">
                            <th class="pb-2">#</th>
                            <th class="pb-2">Description</th>
                            <th class="pb-2 text-right">Qty</th>
                            <th class="pb-2 text-right">Unit Price</th>
                            <th class="pb-2 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($selectedInvoice->items as $idx => $item)
                            <tr class="border-b">
                                <td class="py-2">{{ $idx + 1 }}</td>
                                <td class="py-2">{{ $item->description }}</td>
                                <td class="py-2 text-right">{{ $item->quantity }}</td>
                                <td class="py-2 text-right font-mono">₦{{ number_format($item->unit_price, 2) }}</td>
                                <td class="py-2 text-right font-mono">₦{{ number_format($item->subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="flex flex-col items-end gap-1 text-sm">
                    <div class="flex justify-between w-64">
                        <span class="text-gray-500">Subtotal:</span>
                        <span class="font-mono">₦{{ number_format($selectedInvoice->subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between w-64">
                        <span class="text-gray-500">Tax:</span>
                        <span class="font-mono">₦{{ number_format($selectedInvoice->tax, 2) }}</span>
                    </div>
                    <div class="flex justify-between w-64">
                        <span class="text-gray-500">Discount:</span>
                        <span class="font-mono">₦{{ number_format($selectedInvoice->discount, 2) }}</span>
                    </div>
                    <div class="flex justify-between w-64 border-t pt-1 font-bold">
                        <span>Total:</span>
                        <span class="font-mono">₦{{ number_format($selectedInvoice->total, 2) }}</span>
                    </div>
                </div>

                @if($selectedInvoice->receipts->count() > 0)
                    <div>
                        <p class="text-sm font-semibold mb-2">Payments</p>
                        <div class="divide-y text-sm">
                            @foreach($selectedInvoice->receipts as $receipt)
                                <div class="flex items-center justify-between py-2">
                                    <div>
                                        <span class="font-mono">{{ $receipt->receipt_number }}</span>
                                        <span class="text-gray-500 mx-1">—</span>
                                        <x-badge :text="ucfirst(str_replace('_', ' ', $receipt->payment_method))" xs light />
                                        @if($receipt->payment_reference)
                                            <span class="text-gray-400 ml-1">({{ $receipt->payment_reference }})</span>
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        <span class="font-mono font-semibold">₦{{ number_format($receipt->amount_paid, 2) }}</span>
                                        <span class="text-gray-500 block text-xs">{{ $receipt->paid_at ? \Illuminate\Support\Carbon::parse($receipt->paid_at)->format('M d, Y') : '' }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex justify-end pt-2 text-sm font-semibold">
                            <span>Total Paid: ₦{{ number_format($selectedInvoice->receipts->sum('amount_paid'), 2) }}</span>
                        </div>
                    </div>
                @endif

                <div class="flex gap-2 justify-end">
                    @if($selectedInvoice->status === 'draft')
                        <x-button text="Mark as Sent" wire:click="markAsSent({{ $selectedInvoice->id }})" />
                    @endif
                    @if(in_array($selectedInvoice->status, ['draft', 'sent', 'partial']))
                        <x-button text="Record Payment" icon="banknotes" wire:click="openPaymentModal({{ $selectedInvoice->id }})" />
                    @endif
                </div>
            </div>
        @endif
    </x-modal>

    <x-modal title="Record Payment" wire="paymentModal" x-on:close="$wire.closePaymentModal()">
        @if($selectedInvoice)
            <form wire:submit="recordPayment" class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-500">{{ $selectedInvoice->invoice_number }}</span>
                    <span class="font-semibold font-mono">Balance: ₦{{ number_format($selectedInvoice->total - $selectedInvoice->receipts->sum('amount_paid'), 2) }}</span>
                </div>

                <x-input label="Amount *" placeholder="0.00" wire:model="paymentAmount" prefix="₦" />

                <x-select.styled label="Payment Method *" :options="[
                    ['label' => 'Cash', 'value' => 'cash'],
                    ['label' => 'Card', 'value' => 'card'],
                    ['label' => 'Insurance', 'value' => 'insurance'],
                    ['label' => 'Bank Transfer', 'value' => 'bank_transfer'],
                    ['label' => 'Other', 'value' => 'other'],
                ]" wire:model="paymentMethod" />

                <x-input label="Reference (optional)" placeholder="Transaction ID or note" wire:model="paymentReference" />

                <x-date label="Payment Date *" wire:model="paidAt" />

                <x-button type="submit" text="Record Payment" loading />
            </form>
        @endif
    </x-modal>
</div>
