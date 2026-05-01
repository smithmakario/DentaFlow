<?php

use App\Models\Appointment;
use App\Models\DentalService;
use App\Models\Treatment;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::clinician')]
    class extends Component
    {
        use Interactions;

        public $modal = false;

        public $editingTreatmentId;

        public $treatmentAppointmentId = '';

        public $treatmentName = '';

        public $treatmentToothCode = '';

        public $treatmentDescription = '';

        public $treatmentCost = '';

        public $treatmentCategory = '';

        public $treatmentServiceId = '';

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'patient', 'label' => 'Patient'],
                    ['index' => 'appointment', 'label' => 'Appointment'],
                    ['index' => 'name', 'label' => 'Procedure'],
                    ['index' => 'tooth_code', 'label' => 'Tooth'],
                    ['index' => 'category', 'label' => 'Category'],
                    ['index' => 'base_cost', 'label' => 'Cost'],
                    ['index' => 'created_at', 'label' => 'Date'],
                    ['index' => 'action', 'label' => 'Action'],
                ],
                'rows' => Treatment::whereHas('appointment', fn($q) => $q->where('clinician_id', auth()->id()))
                    ->with('appointment.patient')
                    ->latest()
                    ->get(),
            ];
        }

        #[Computed]
        public function appointmentOptions()
        {
            return Appointment::where('clinician_id', auth()->id())
                ->with('patient')
                ->latest()
                ->get()
                ->map(fn($a) => [
                    'label' => $a->title . ' — ' . ($a->patient->first_name ?? '') . ' ' . ($a->patient->last_name ?? '') .' — ' . $a->scheduled_at,
                    'value' => (string) $a->id,
                ])
                ->toArray();
        }

        public function getServiceOptionsProperty()
        {
            $services = [];
            tenancy()->central(function () use (&$services) {
                $services = DentalService::all()->map(fn($s) => [
                    'label' => $s->name . ' — ₦' . number_format($s->default_cost, 2),
                    'value' => (string) $s->id,
                ])->toArray();
            });
            return $services;
        }

        public function updatedTreatmentServiceId($value)
        {
            if (! $value) return;
            tenancy()->central(function () use ($value) {
                $service = DentalService::find($value);
                if ($service) {
                    $this->treatmentName = $service->name;
                    $this->treatmentCategory = $service->category;
                    $this->treatmentCost = (string) $service->default_cost;
                }
            });
        }

        #[Computed]
        public function categoryOptions()
        {
            return [
                ['label' => 'Cleaning', 'value' => 'Cleaning'],
                ['label' => 'Filling', 'value' => 'Filling'],
                ['label' => 'Extraction', 'value' => 'Extraction'],
                ['label' => 'Crown', 'value' => 'Crown'],
                ['label' => 'Bridge', 'value' => 'Bridge'],
                ['label' => 'Root Canal', 'value' => 'Root Canal'],
                ['label' => 'Whitening', 'value' => 'Whitening'],
                ['label' => 'Checkup', 'value' => 'Checkup'],
                ['label' => 'Surgery', 'value' => 'Surgery'],
                ['label' => 'Other', 'value' => 'Other'],
            ];
        }

        public function openAddModal()
        {
            $this->resetForm();
            $this->modal = true;
        }

        public function resetForm()
        {
            $this->editingTreatmentId = null;
            $this->treatmentAppointmentId = '';
            $this->treatmentName = '';
            $this->treatmentToothCode = '';
            $this->treatmentDescription = '';
            $this->treatmentCost = '';
            $this->treatmentCategory = '';
            $this->treatmentServiceId = '';
        }

        public function save()
        {
            $this->validate([
                'treatmentAppointmentId' => 'required|exists:appointments,id',
                'treatmentName' => 'required',
                'treatmentCost' => 'required|numeric|min:0',
                'treatmentCategory' => 'required',
            ]);

            if ($this->editingTreatmentId) {
                $treatment = Treatment::findOrFail($this->editingTreatmentId);
                $treatment->update([
                    'appointment_id' => $this->treatmentAppointmentId,
                    'name' => $this->treatmentName,
                    'tooth_code' => $this->treatmentToothCode,
                    'description' => $this->treatmentDescription,
                    'base_cost' => $this->treatmentCost,
                    'category' => $this->treatmentCategory,
                ]);
                $this->toast()->success('Treatment updated')->send();
            } else {
                Treatment::create([
                    'appointment_id' => $this->treatmentAppointmentId,
                    'name' => $this->treatmentName,
                    'tooth_code' => $this->treatmentToothCode,
                    'description' => $this->treatmentDescription,
                    'base_cost' => $this->treatmentCost,
                    'category' => $this->treatmentCategory,
                ]);
                $this->toast()->success('Treatment added')->send();
            }

            $this->modal = false;
            $this->resetForm();
        }

        public function editTreatment($id)
        {
            $treatment = Treatment::findOrFail($id);
            $this->editingTreatmentId = $id;
            $this->treatmentAppointmentId = (string) $treatment->appointment_id;
            $this->treatmentName = $treatment->name;
            $this->treatmentToothCode = $treatment->tooth_code;
            $this->treatmentDescription = $treatment->description;
            $this->treatmentCost = $treatment->base_cost;
            $this->treatmentCategory = $treatment->category;
            $this->modal = true;
        }

        public function deleteTreatment($id)
        {
            $this->editingTreatmentId = $id;
            $this
                ->dialog()
                ->confirm('Delete treatment?', 'This action cannot be undone.')
                ->confirm('Delete', 'red', 'deleteConfirmed')
                ->cancel()
                ->send();
        }

        public function deleteConfirmed()
        {
            Treatment::findOrFail($this->editingTreatmentId)->delete();
            $this->editingTreatmentId = null;
            $this->toast()->success('Treatment deleted')->send();
        }
    };
?>

<div>
    <x-card>
        <x-slot:header>
            Treatments
            <x-button text="Add Treatment" icon="plus" wire:click="openAddModal" />
        </x-slot:header>
        <x-table :$headers :$rows>
            @interact('column_patient', $row)
            <span>{{ $row['appointment']['patient']['first_name'] ?? '' }} {{ $row['appointment']['patient']['last_name'] ?? '—' }}</span>
            @endinteract

            @interact('column_appointment', $row)
            <span>{{ $row['appointment']['title'] ?? '—' }}</span>
            @endinteract

            @interact('column_name', $row)
            <span class="font-medium">{{ $row['name'] }}</span>
            @endinteract

            @interact('column_tooth_code', $row)
            <span>{{ $row['tooth_code'] ?: '—' }}</span>
            @endinteract

            @interact('column_category', $row)
            <x-badge :text="$row['category']" light />
            @endinteract

            @interact('column_base_cost', $row)
            <span class="font-mono">${{ number_format($row['base_cost'], 2) }}</span>
            @endinteract

            @interact('column_created_at', $row)
            <span>{{ \Illuminate\Support\Carbon::parse($row['created_at'])->format('M d, Y') }}</span>
            @endinteract

            @interact('column_action', $row)
            <div class="flex items-center gap-1">
                <x-button icon="pencil" xs wire:click="editTreatment({{ $row->id }})" />
                <x-button icon="trash" xs color="red" wire:click="deleteTreatment({{ $row->id }})" />
            </div>
            @endinteract
        </x-table>
    </x-card>

    <x-modal title="{{ $editingTreatmentId ? 'Edit Treatment' : 'Add Treatment' }}" wire="modal" x-on:close="$wire.resetForm()">
        <form wire:submit="save" class="space-y-4">
            <x-select.styled label="Appointment *" :options="$this->appointmentOptions" wire:model="treatmentAppointmentId" />

            <x-select.styled label="Service (optional)" :options="$this->serviceOptions" wire:model="treatmentServiceId" />

            <x-input label="Procedure name *" placeholder="e.g. Composite filling" wire:model="treatmentName" />

            <div class="flex gap-2">
                <div class="w-32">
                    <x-input label="Tooth code" placeholder="e.g. 14" wire:model="treatmentToothCode" />
                </div>
                <div class="flex-1">
                    <x-select.styled label="Category *" :options="$this->categoryOptions" wire:model="treatmentCategory" />
                </div>
            </div>

            <x-textarea label="Description" placeholder="Add notes about this treatment" wire:model="treatmentDescription" />

            <x-input label="Cost *" placeholder="0.00" wire:model="treatmentCost" prefix="₦" />

            <x-button type="submit" :text="$editingTreatmentId ? 'Update' : 'Add'" loading />
        </form>
    </x-modal>
</div>
