<?php


use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::patient')]
    class extends Component
    {
        use Interactions;

        #[Validate('required')]
        public $clinician;

        #[Validate('required')]
        public $schedule;

        public $notes;

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
    };
?>

<div>
    <x-modal title="Book Appointment" id="app-modal">
        <form action="" wire:submit="save">
            <div class="mb-6">
                <x-select.styled label="Clinician *" :options="$this->clinicians" wire:model="clinician" />
            </div>
            <div class="mb-6">
               <x-date label="Schedule *" placeholder="Select schedule date" wire:model="schedule" />
            </div>
            <div class="mb-6">
                <x-textarea label="Notes" placeholder="Add notes"  wire:model="notes" />
            </div>
            <x-button type="submit" text="Book now!" />
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
                    <x-button text="Book now" icon="plus" x-on:click="$tsui.open.modal('app-modal')" />
                </div>
            </x-slot:header>
            <div id="calendar" class="h-full min-h-[650px]"></div>
        </x-card>
    </div>
</div>
@script
<script type="module">
const calendarElement = document.querySelector("#calendar");
let calendar = new Calendar(calendarElement, {
    height: '100%',
    expandRows: true,
    plugins: [dayGridPlugin, interactionPlugin],
    initialView: 'dayGridMonth',

    events: '{{ route("calendar.appointments") }}',

    dateClick(info) {
        Livewire.dispatch('date-selected', { date: info.dateStr });
    },

    eventClick(info) {
        Livewire.dispatch('event-selected', { id: info.event.id });
    }
});
calendar.render();
</script>
@endscript
