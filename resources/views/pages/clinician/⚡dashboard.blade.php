<?php


use App\Models\Appointment;
use App\Models\AppointmentQueue;
use Livewire\Attributes\Layout;
use Livewire\Component;

new
    #[Layout('layouts::clinician')]
    class extends Component
    {
        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'patient_id', 'label' => 'Patient name'],
                    ['index' => 'appointment_id', 'label' => 'Appointment'],
                    ['index' => 'position', 'label' => 'Position'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'rows' => AppointmentQueue::limit(5)->get()
            ];
        }
    };
?>

<div>
    <div class="mb-6">
        <p class="text-xl">Welcome, {{ ucfirst(auth()->user()->username) }}</p>
    </div>
    <div class="flex gap-3 mb-6">
        <x-stats title="Treatments" :number="20" icon="swatch"  />
        <x-stats title="Appointment Queue" :number="4" icon="swatch" color="yellow"  />
        <x-stats title="Medical Records" :number="123" icon="swatch" color="green" />
    </div>
    <div class="flex gap-3 mb-6 flex-col">
        <div class="basis-1/2">
            <x-card>
                <x-slot:header>
                    <div class="flex items-center gap-2">
                        <x-icon name="users" outline class="h-8 w-8" /> Recent Schedules
                    </div>
                </x-slot:header>
                <x-table :$headers :$rows />
            </x-card>
        </div>
        <div class="basis-1/2 order-first">
            <x-card>
                <x-slot:header>
                    <div class="flex items-center gap-2">
                        <x-icon name="calendar" outline class="h-8 w-8" /> Calendar
                    </div>
                </x-slot:header>
                <div id="calendar" class="min-h-[500px]"></div>
            </x-card>
        </div>
    </div>
</div>
@script
<script>
const calendarElement = document.querySelector("#calendar");
let calendar = new Calendar(calendarElement, {
    height: '100%',
    expandRows: true,
    plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
    initialView: 'dayGridMonth',
    headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'today,dayGridMonth,timeGridWeek,timeGridDay',        
    },

    events: '{{ route("calendar.appointments") }}',

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
</script>
@endscript
