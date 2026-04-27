<?php

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\AppointmentQueue;
use App\Models\Treatment;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::clinician')]
    class extends Component
    {
        use Interactions;

        public $modal;

        public $selectedQueueItem;

        public AppointmentForm $form;

        public $treatmentsModal = false;

        public $selectedQueueItemForTreatments;

        public $editingTreatmentId;

        public $treatmentName = '';

        public $treatmentToothCode = '';

        public $treatmentDescription = '';

        public $treatmentCost = '';

        public $treatmentCategory = '';

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'patient_id', 'label' => 'Patient name'],
                    ['index' => 'appointment_id', 'label' => 'Title'],
                    ['index' => 'position', 'label' => 'Position', 'sortable' => false],
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'status', 'label' => 'Status'],
                    ['index' => 'action', 'label' => 'Action'],
                ],
                'rows' => AppointmentQueue::with(['appointment.treatments', 'patient'])
                    ->where('clinician_id', auth()->id())
                    ->orderBy('position')
                    ->get()
            ];
        }

        public function moveUp($id)
        {
            $current = AppointmentQueue::where('clinician_id', auth()->id())->findOrFail($id);
            $previous = AppointmentQueue::where('clinician_id', auth()->id())
                ->where('position', '<', $current->position)
                ->orderBy('position', 'desc')
                ->first();

            if (!$previous) return;

            $temp = $current->position;
            $current->update(['position' => $previous->position]);
            $previous->update(['position' => $temp]);
        }

        public function moveDown($id)
        {
            $current = AppointmentQueue::where('clinician_id', auth()->id())->findOrFail($id);
            $next = AppointmentQueue::where('clinician_id', auth()->id())
                ->where('position', '>', $current->position)
                ->orderBy('position', 'asc')
                ->first();

            if (!$next) return;

            $temp = $current->position;
            $current->update(['position' => $next->position]);
            $next->update(['position' => $temp]);
        }

        public function markCheckedOut($id)
        {
            $queueItem = AppointmentQueue::where('clinician_id', auth()->id())->findOrFail($id);
            $queueItem->update(['status' => 'checked_out']);
        }

        public function editAppointment($queueId)
        {
            $queueItem = AppointmentQueue::with('appointment.patient')
                ->where('clinician_id', auth()->id())
                ->findOrFail($queueId);

            $this->selectedQueueItem = $queueItem;
            $this->form->setAppointment($queueItem->appointment);
            $this->modal = true;
        }

        public function resetEditModal()
        {
            $this->form->reset();
            $this->selectedQueueItem = null;
        }

        public function save()
        {
            $this->form->update();
            $this->modal = false;
            $this->selectedQueueItem = null;
            $this->toast()->success('Appointment updated')->send();
        }

        public function openTreatmentsModal($queueId)
        {
            $queueItem = AppointmentQueue::with('appointment.treatments', 'patient')
                ->where('clinician_id', auth()->id())
                ->findOrFail($queueId);

            $this->selectedQueueItemForTreatments = $queueItem;
            $this->resetTreatmentForm();
            $this->treatmentsModal = true;
        }

        public function resetTreatmentForm()
        {
            $this->editingTreatmentId = null;
            $this->treatmentName = '';
            $this->treatmentToothCode = '';
            $this->treatmentDescription = '';
            $this->treatmentCost = '';
            $this->treatmentCategory = '';
        }

        public function closeTreatmentsModal()
        {
            $this->treatmentsModal = false;
            $this->selectedQueueItemForTreatments = null;
            $this->resetTreatmentForm();
        }

        public function addTreatment()
        {
            $this->validate([
                'treatmentName' => 'required',
                'treatmentCost' => 'required|numeric|min:0',
                'treatmentCategory' => 'required',
            ]);

            Treatment::create([
                'appointment_id' => $this->selectedQueueItemForTreatments->appointment_id,
                'name' => $this->treatmentName,
                'tooth_code' => $this->treatmentToothCode,
                'description' => $this->treatmentDescription,
                'base_cost' => $this->treatmentCost,
                'category' => $this->treatmentCategory,
            ]);

            $this->resetTreatmentForm();
            $this->selectedQueueItemForTreatments->load('appointment.treatments');
            $this->toast()->success('Treatment added')->send();
        }

        public function editTreatment($treatmentId)
        {
            $treatment = Treatment::findOrFail($treatmentId);
            $this->editingTreatmentId = $treatmentId;
            $this->treatmentName = $treatment->name;
            $this->treatmentToothCode = $treatment->tooth_code;
            $this->treatmentDescription = $treatment->description;
            $this->treatmentCost = $treatment->base_cost;
            $this->treatmentCategory = $treatment->category;
        }

        public function updateTreatment()
        {
            $this->validate([
                'treatmentName' => 'required',
                'treatmentCost' => 'required|numeric|min:0',
                'treatmentCategory' => 'required',
            ]);

            $treatment = Treatment::findOrFail($this->editingTreatmentId);
            $treatment->update([
                'name' => $this->treatmentName,
                'tooth_code' => $this->treatmentToothCode,
                'description' => $this->treatmentDescription,
                'base_cost' => $this->treatmentCost,
                'category' => $this->treatmentCategory,
            ]);

            $this->resetTreatmentForm();
            $this->selectedQueueItemForTreatments->load('appointment.treatments');
            $this->toast()->success('Treatment updated')->send();
        }

        public function deleteTreatment($treatmentId)
        {
            $this->dialog()->confirm('Delete treatment?', 'This action cannot be undone.')
                ->confirm('Delete', 'red', 'deleteTreatmentConfirmed')
                ->cancel()
                ->send();

            $this->editingTreatmentId = $treatmentId;
        }

        public function deleteTreatmentConfirmed()
        {
            Treatment::findOrFail($this->editingTreatmentId)->delete();
            $this->editingTreatmentId = null;
            $this->selectedQueueItemForTreatments->load('appointment.treatments');
            $this->toast()->success('Treatment deleted')->send();
        }

        public function getCategoryOptionsProperty()
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
    };
?>

<div>
    <x-card>
        <x-slot:header>
            Appointments
            <a href="{{ route('clinician.calendar') }}">
                <x-button text="Schedule" icon="calendar" />
            </a>
        </x-slot:header>
        <x-table :$headers :$rows>
            @interact('column_patient_id', $row)
            <div class="flex items-center gap-2">
                <x-avatar class="h-5 w-5" />
                <div>
                    <div>{{ $row['patient']['first_name'].' '.$row['patient']['last_name'] }}</div>
                    <x-badge :text="'@'.$row['patient']['username']" />
                </div>
            </div>
            @endinteract

            @interact('column_appointment_id', $row)
            <span>{{ $row['appointment']['title'] }}</span>
            @endinteract

            @interact('column_position', $row)
            <div class="flex items-center gap-1">
                <span class="font-mono font-bold w-6 text-center">{{ $row['position'] }}</span>
                <div class="flex flex-col gap-0.5">
                    <x-button icon="chevron-up" xs wire:click="moveUp({{ $row->id }})" class="!p-0.5 !h-5 !w-5" />
                    <x-button icon="chevron-down" xs wire:click="moveDown({{ $row->id }})" class="!p-0.5 !h-5 !w-5" />
                </div>
            </div>
            @endinteract

            @interact('column_scheduled_at', $row)
            <span>{{ $row['appointment']['scheduled_at'] }}</span>
            @endinteract

            @interact('column_status', $row)
            @php
                $statusColor = match($row->status) {
                    'completed' => 'green',
                    'queued' => 'blue',
                    'in_progress' => 'yellow',
                    'checked_out' => 'zinc',
                    'cancelled' => 'red',
                    default => 'zinc'
                };
            @endphp
            <div class="flex items-center gap-2">
                <x-badge :text="ucfirst(str_replace('_', ' ', $row->status))" :color="$statusColor" light />
                @if($row->status === 'in_progress')
                    <x-button text="Treatments" icon="clipboard-document-list" xs wire:click="openTreatmentsModal({{ $row->id }})" />
                    <x-button text="Check Out" icon="arrow-right-on-square" xs wire:click="markCheckedOut({{ $row->id }})" />
                @endif
            </div>
            @endinteract

            @interact('column_action', $row)
            <x-button text="Edit" icon="pencil" xs wire:click="editAppointment({{ $row->id }})" />
            @endinteract
        </x-table>
    </x-card>

    <x-modal title="Edit Appointment" wire="modal" x-on:close="$wire.resetEditModal()">
        <form wire:submit="save" class="space-y-4">
            @if($selectedQueueItem)
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <x-avatar lg />
                    <div>
                        <p class="text-lg font-bold">{{ $selectedQueueItem->patient->first_name }} {{ $selectedQueueItem->patient->last_name }}</p>
                        <p class="text-sm text-gray-500">{{ $selectedQueueItem->patient->email }}</p>
                        <x-badge :text="'@' . $selectedQueueItem->patient->username" light />
                    </div>
                </div>

                <x-select.styled label="Status" :options="[
                    ['label' => 'Pending', 'value' => 'pending'],
                    ['label' => 'Confirmed', 'value' => 'confirmed'],
                    ['label' => 'Completed', 'value' => 'completed'],
                    ['label' => 'Cancelled', 'value' => 'cancelled'],
                ]" wire:model="form.status" />

                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500">Current:</span>
                    @php
                        $statusColor = match($form->status) {
                            'completed' => 'green',
                            'confirmed' => 'blue',
                            'pending' => 'yellow',
                            'cancelled' => 'red',
                            default => 'zinc'
                        };
                    @endphp
                    <x-badge :text="ucfirst($form->status)" :color="$statusColor" light />
                </div>
            @endif

            <x-input label="Title *" placeholder="Enter title" wire:model="form.title" />

            <div class="flex gap-2">
                <div class="basis-1/2">
                    <x-date label="Schedule date *" placeholder="Select schedule date" wire:model="form.schedule_date" />
                </div>
                <div class="basis-1/2">
                    <x-time label="Schedule time *" wire:model="form.schedule_time" placeholder="Select schedule time" />
                </div>
            </div>

            <x-textarea label="Notes" placeholder="Add notes" wire:model="form.notes" />

            <x-button type="submit" text="Update" />
        </form>
    </x-modal>

    <x-modal title="Treatments" wire="treatmentsModal" x-on:close="$wire.closeTreatmentsModal()">
        @if($selectedQueueItemForTreatments)
            <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg mb-4">
                <x-avatar lg />
                <div>
                    <p class="text-lg font-bold">{{ $selectedQueueItemForTreatments->patient->first_name }} {{ $selectedQueueItemForTreatments->patient->last_name }}</p>
                    <p class="text-sm text-gray-500">{{ $selectedQueueItemForTreatments->appointment->title }}</p>
                </div>
            </div>

            @if($selectedQueueItemForTreatments->appointment->treatments->count() > 0)
                <div class="divide-y mb-4">
                    @foreach($selectedQueueItemForTreatments->appointment->treatments as $treatment)
                        <div class="flex items-center justify-between py-3">
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-medium">{{ $treatment->name }}</span>
                                    <x-badge :text="$treatment->category" xs light />
                                </div>
                                @if($treatment->tooth_code || $treatment->description)
                                    <p class="text-sm text-gray-500">
                                        {{ $treatment->tooth_code ? 'Tooth: '.$treatment->tooth_code : '' }}
                                        {{ $treatment->tooth_code && $treatment->description ? ' — ' : '' }}
                                        {{ $treatment->description ?? '' }}
                                    </p>
                                @endif
                                <p class="text-sm font-semibold">${{ number_format($treatment->base_cost, 2) }}</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <x-button icon="pencil" xs wire:click="editTreatment({{ $treatment->id }})" />
                                <x-button icon="trash" xs color="red" wire:click="deleteTreatment({{ $treatment->id }})" />
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-sm text-gray-500 mb-4">No treatments added yet.</p>
            @endif

            <hr class="mb-4">

            <p class="text-sm font-semibold mb-3">{{ $editingTreatmentId ? 'Edit Treatment' : 'Add Treatment' }}</p>
            <div class="space-y-3">
                <div class="flex gap-2">
                    <div class="flex-1">
                        <x-input label="Procedure name *" placeholder="e.g. Composite filling" wire:model="treatmentName" />
                    </div>
                    <div class="w-32">
                        <x-input label="Tooth code" placeholder="e.g. 14" wire:model="treatmentToothCode" />
                    </div>
                </div>
                <x-textarea label="Description" placeholder="Add notes about this treatment" wire:model="treatmentDescription" />
                <div class="flex gap-2">
                    <div class="flex-1">
                        <x-input label="Cost *" placeholder="0.00" wire:model="treatmentCost" prefix="$" />
                    </div>
                    <div class="flex-1">
                        <x-select.styled label="Category *" :options="$this->categoryOptions" wire:model="treatmentCategory" />
                    </div>
                </div>
                <div class="flex gap-2 justify-end">
                    @if($editingTreatmentId)
                        <x-button text="Cancel" outline wire:click="resetTreatmentForm" />
                        <x-button text="Update" wire:click="updateTreatment" />
                    @else
                        <x-button text="Add" wire:click="addTreatment" />
                    @endif
                </div>
            </div>
        @endif
    </x-modal>
</div>
