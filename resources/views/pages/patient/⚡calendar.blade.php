<?php

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\DentalService;
use App\Models\Document;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::patient')]
    class extends Component
    {
        use Interactions;

        public $edit = false;

        public $modal;

        public $selectedServiceId = '';

        public AppointmentForm $form;

        #[Computed]
        public function clinicians()
        {
            return User::where('user_type', 'clinician')
                ->with('userProfile')
                ->get()
                ->map(function ($user) {
                    $profile = $user->userProfile;
                    $parts = [];
                    if ($profile?->specialization) $parts[] = $profile->specialization;
                    if ($profile?->years_of_experience) $parts[] = $profile->years_of_experience . ' yrs';
                    return [
                        'value' => $user->id,
                        'label' => $user->first_name . ' ' . $user->last_name,
                        'description' => $parts ? implode(' · ', $parts) : 'General Dentistry',
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
            $appointment = Appointment::find($id);
            $this->form->setAppointment($appointment);
            $this->modal = true;
        }

        public function resetForm()
        {
            $this->form->reset();
        }    

        public function save()
        {
            $this->validate();
            if (!$this->edit) {
                $appointment = $this->form->save();
                if ($this->selectedServiceId) {
                    $serviceId = $this->selectedServiceId;
                    $serviceData = [];
                    tenancy()->central(function () use ($serviceId, &$serviceData) {
                        $service = DentalService::find($serviceId);
                        if ($service) {
                            $serviceData = [
                                'name' => $service->name,
                                'description' => $service->description,
                                'category' => $service->category,
                                'base_cost' => $service->default_cost,
                            ];
                        }
                    });
                    if ($serviceData) {
                        $serviceData['appointment_id'] = $appointment->id;
                        Treatment::create($serviceData);
                    }
                }
                $this->toast()->success('Appointment created')->send();
            } else {
                $this->edit = false;
                $this->form->update();
                $this->toast()->success('Appointment updated')->send();
            }
            $this->modal = false;
            $this->dispatch('success');
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

        public function updatedSelectedServiceId($value)
        {
            if (! $value) return;
            tenancy()->central(function () use ($value) {
                $service = DentalService::find($value);
                if ($service) {
                    $this->form->title = $service->name;
                }
            });
        }

        public function getDocumentOptionsProperty()
        {
            return Document::where('patient_id', auth()->id())
                ->latest()
                ->get()
                ->map(fn($d) => [
                    'label' => $d->title . ' (' . $d->document_type . ')',
                    'value' => (string) $d->id,
                ])
                ->toArray();
        }
    };
?>

<div>
    <x-modal title="Book Appointment" id="app-modal" wire="modal" x-on:close="$wire.resetForm()">
        <form action="" wire:submit="save">
            <div class="flex mb-6 gap-2">
                <div class="basis-1/2">
                    <x-input label="Title *" placeholder="Enter title" wire:model="form.title" />
                </div>
                <div class="basis-1/2">
                    <x-select.styled label="Doctor *" :options="$this->clinicians" wire:model="form.clinician_id" />
                </div>
            </div>
            <div class="mb-6 flex gap-2">
                <div class="basis-1/2">
                    <x-date label="Schedule date *" placeholder="Select schedule date" wire:model="form.schedule_date" />
                </div>
                <div class="basis-1/2">
                    <x-time label="Schedule time *" wire:model="form.schedule_time" placeholder="Select schedule time" />
                </div>
            </div>
            <div class="mb-6">
                <x-select.styled label="Service (optional)" :options="$this->serviceOptions" wire:model="selectedServiceId" />
            </div>
            <div class="mb-6">
                <x-textarea label="Notes" placeholder="Add notes"  wire:model="form.notes" />
            </div>
            <div class="mb-6">
                <x-select.styled label="Attach documents (optional)" :options="$this->documentOptions" wire:model="form.selectedDocuments" multiple searchable />
            </div>
            <x-button type="submit" text="Book" loading />
        </form>
    </x-modal>
    <div class="mb-6">
        <a href="{{ route('patient.appointments' )}}">
            <x-button text="Back to appointments" outline icon="arrow-long-left"/>
        </a>
    </div>
    <div class="mb-6">
        <x-card>
            <x-slot:header>
                Calender
                <div>
                    <x-button text="Book now" icon="plus" wire:click="$toggle('modal')" />
                </div>
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

    events: '{{ route("patient.calendar.appointments") }}',

    dateClick(info) {
        console.log(info);
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
