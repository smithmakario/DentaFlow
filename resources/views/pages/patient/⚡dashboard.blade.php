<?php

use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Component;

new
    #[Layout('layouts::patient')]
    class extends Component
    {
        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'doctor_id', 'label' => 'Doctor name'],
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'notes', 'label' => 'Notes'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::with('doctor')->limit(5)->get()
            ];
        }
    };
?>

<div>
    <div class="mb-6">
        <p>Welcome, {{ auth()->user()->username }}</p>
    </div>
    <div class="flex gap-3 mb-6">
        <x-stats title="Treatments" :number="20" icon="swatch"  />
        <x-stats title="Appointments" :number="4" icon="swatch" color="yellow"  />
        <x-stats title="Medical Records" :number="123" icon="swatch" color="green" />
    </div>
    <div class="flex gap-3 mb-6">
        <div class="basis-1/2">
            <x-card class="h-full">
                <x-slot:header>
                    <div class="flex gap-2 items-center">
                        <x-icon name="user-circle" outline class="h-8 w-8" /> Recent Appointments
                    </div>
                    <a href="{{ route('patient.appointments')}}">
                        <x-button icon="clock" text="appointments" />
                    </a>
                </x-slot:header>
                <x-table :$headers :$rows>
                    @interact('column_doctor_id', $row)
                    <div>
                        <span>{{ $row['doctor']['first_name'].' '.  $row['doctor']['last_name'] }}</span>
                        <x-badge :text="'@'.$row['doctor']['username']" />
                    </div>            
                    @endinteract

                    @interact('column_status', $row)
                    <x-badge :text="$row['status']" color="zinc"/>
                    @endinteract
                </x-table>
            </x-card>
        </div>
        <div class="basis-1/2">
            <x-card>
                <x-slot:header>
                    <div class="flex items-center gap-2">
                        <x-icon name="folder-open" outline class="h-8 w-8" /> Treatments
                    </div>
                    <a href="{{ route('patient.calendar') }}">
                        <x-button text="Book appointment" />
                    </a>
                </x-slot:header>
                <div id="calendar" class="min-h-[500px] w-full"></div>
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
