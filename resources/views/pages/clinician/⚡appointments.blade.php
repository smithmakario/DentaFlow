<?php

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\AppointmentQueue;
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
                'rows' => AppointmentQueue::with(['appointment', 'patient'])
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
                    'cancelled' => 'red',
                    default => 'zinc'
                };
            @endphp
            <x-badge :text="ucfirst(str_replace('_', ' ', $row->status))" :color="$statusColor" light />
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
</div>
