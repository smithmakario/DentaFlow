<?php

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::clinician')]
    class extends Component
    {
        use Interactions;

        public $edit = false;

        public $modal;

        public $selectedAppointment;

        public AppointmentForm $form;

        #[Computed]
        public function clinicians()
        {
            return User::where('user_type', 'clinician')->get()->map(function ($user) {
                return [
                    'value' => $user->id,
                    'label' => $user->username,
                ];
            })->toArray();
        }

        #[On('date-selected')]
        public function date_selected($date)
        {
            $date_object = Carbon::parse($date);
            if ($date_object < Carbon::now()) {
                $this->dialog()->error('Invalid appointment date')->send();
                return;
            }
            $this->form->schedule_date = $date;
            $this->modal = true;
        }

        #[On('event-selected')]
        public function event_selected($id)
        {
            $this->edit = true;
            $appointment = Appointment::with('patient')->find($id);
            $this->selectedAppointment = $appointment;
            $this->form->setAppointment($appointment);
            $this->modal = true;
        }

        public function resetForm()
        {
            $this->form->reset();
            $this->selectedAppointment = null;
        }

        public function save()
        {
            $this->validate();
            if (!$this->edit) {
                $appointment = $this->form->save();
                $this->toast()->success('Appointment created')->send();
            } else {
                $this->edit = false;
                $this->form->update();
                $this->toast()->success('Appointment updated')->send();
            }
            $this->modal = false;
            $this->selectedAppointment = null;
            $this->dispatch('success');
        }
    };
?>

<div>
    <x-modal title="{{ $edit ? 'Appointment Details' : 'Book Appointment' }}" id="app-modal" wire="modal" x-on:close="$wire.resetForm()">
        <form wire:submit="save" class="space-y-4">
            @if($edit && $selectedAppointment)
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <x-avatar lg />
                    <div>
                        <p class="text-lg font-bold">{{ $selectedAppointment->patient->first_name }} {{ $selectedAppointment->patient->last_name }}</p>
                        <p class="text-sm text-gray-500">{{ $selectedAppointment->patient->email }}</p>
                        <x-badge :text="'@' . $selectedAppointment->patient->username" light />
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

            @unless($edit)
                <x-select.styled label="Doctor *" :options="$this->clinicians" wire:model="form.clinician_id" />
            @endunless

            <div class="flex gap-2">
                <div class="basis-1/2">
                    <x-date label="Schedule date *" placeholder="Select schedule date" wire:model="form.schedule_date" />
                </div>
                <div class="basis-1/2">
                    <x-time label="Schedule time *" wire:model="form.schedule_time" placeholder="Select schedule time" />
                </div>
            </div>

            <x-textarea label="Notes" placeholder="Add notes" wire:model="form.notes" />

            <x-button type="submit" :text="$edit ? 'Update' : 'Book'" />
        </form>
    </x-modal>

    <div class="mb-6">
        <a href="{{ route('clinician.appointments' )}}">
            <x-button text="Back to appointments" outline icon="arrow-long-left"/>
        </a>
    </div>
    <div class="mb-6">
        <x-card>
            <x-slot:header>
                Calendar
            </x-slot:header>
            <div wire:ignore id="calendar" class="h-full min-h-[650px] w-full"></div>
        </x-card>
    </div>
</div>
@script
<script type="module">
const calendarElement = document.querySelector("#calendar");
let calendar = new Calendar(calendarElement, {
    height: '100%',
    width: '100%',
    expandRows: true,
    plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
    initialView: 'dayGridMonth',
    selectable: true,
    headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'today,dayGridMonth,timeGridWeek,timeGridDay',
    },

    events: '{{ route("clinician.calendar.appointments") }}',

    dateClick(info) {
        Livewire.dispatch('date-selected', { date: info.dateStr });
    },

    eventClick(info) {
        Livewire.dispatch('event-selected', { id: info.event.id });
    }
});
calendar.render();
setTimeout(() => {
    calendar.updateSize();
}, 500)

Livewire.on('success', () => {
    calendar.refetchEvents();
});
</script>
@endscript
