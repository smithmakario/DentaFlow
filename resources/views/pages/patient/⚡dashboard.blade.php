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
                    ['index' => 'clinician_id', 'label' => 'Clinician name'],
                    ['index' => 'title', 'label' => 'Title'],
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::with('clinician')->limit(5)->get()
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
        <x-stats title="Appointments" :number="4" icon="swatch" color="yellow"  />
        <x-stats title="Medical Records" :number="123" icon="swatch" color="green" />
    </div>
    <div class="flex gap-3 mb-6 flex-col">
        <div class="basis-1/2">
            <x-card class="h-full">
                <x-slot:header>
                    <div class="flex gap-2 items-center">
                        <x-icon name="users" outline class="h-8 w-8" /> Previous Appointments
                    </div>
                    <a href="{{ route('patient.appointments')}}">
                        <x-button icon="clock" text="View" outline/>
                    </a>
                </x-slot:header>
                <x-table :$headers :$rows>
            @interact('column_clinician_id', $row)
            <div class="flex items-center gap-3">
                <x-avatar sm />
                <div>
                    <span class="font-bold">{{ $row['clinician']['first_name'].' '.  $row['clinician']['last_name'] }}</span>
                    <div class="mt-2">
                        <x-badge :text="'@'.$row['clinician']['username']" />
                    </div>
                </div>
            </div>            
            @endinteract

            @interact('column_scheduled_at', $row)
            <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $row->scheduled_at)->format('F d, Y H:i a') }}</span>
            @endinteract

                    @interact('column_status', $row)
                    <x-badge :text="$row['status']" color="zinc"/>
                    @endinteract
                </x-table>
            </x-card>
        </div>
        <div class="basis-1/2 order-first">
            <x-card>
                <x-slot:header>
                    <div class="flex items-center gap-2">
                        <x-icon name="calendar" outline class="h-8 w-8" /> Calendar
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
setTimeout(() => {
    calendar.updateSize();
}, 500)
</script>
@endscript
