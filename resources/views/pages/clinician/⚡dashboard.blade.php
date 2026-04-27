<?php

use App\Models\Appointment;
use App\Models\AppointmentQueue;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new
    #[Layout('layouts::clinician')]
    class extends Component
    {
        use WithPagination;

        #[Computed]
        public function totalPatients()
        {
            return Appointment::where('clinician_id', auth()->id())
                ->distinct('patient_id')
                ->count('patient_id');
        }

        #[Computed]
        public function todayAppointments()
        {
            return Appointment::where('clinician_id', auth()->id())
                ->whereDate('scheduled_at', today())
                ->count();
        }

        #[Computed]
        public function pendingAppointments()
        {
            return Appointment::where('clinician_id', auth()->id())
                ->where('status', 'pending')
                ->count();
        }

        #[Computed]
        public function inQueue()
        {
            return AppointmentQueue::where('clinician_id', auth()->id())
                ->where('status', 'queued')
                ->count();
        }

        #[Computed]
        public function nextAppointment()
        {
            return Appointment::with('patient')
                ->where('clinician_id', auth()->id())
                ->where('scheduled_at', '>', now())
                ->orderBy('scheduled_at')
                ->first();
        }

        public function with(): array
        {
            return [
                'queueHeaders' => [
                    ['index' => 'patient_id', 'label' => 'Patient name'],
                    ['index' => 'appointment_id', 'label' => 'Appointment'],
                    ['index' => 'position', 'label' => 'Position'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'queueRows' => AppointmentQueue::with(['patient', 'appointment'])
                    ->where('clinician_id', auth()->id())
                    ->orderBy('position')
                    ->paginate(10),
                'todayHeaders' => [
                    ['index' => 'patient_id', 'label' => 'Patient'],
                    ['index' => 'scheduled_at', 'label' => 'Time'],
                    ['index' => 'title', 'label' => 'Title'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'todayRows' => Appointment::with('patient')
                    ->where('clinician_id', auth()->id())
                    ->whereDate('scheduled_at', today())
                    ->orderBy('scheduled_at')
                    ->get(),
            ];
        }
    };
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Welcome, Dr. {{ ucfirst(auth()->user()->last_name ?: auth()->user()->username) }}</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-stats :title="'Total Patients'" :number="$this->totalPatients" icon="users" />
        <x-stats :title="'Today\'s Appointments'" :number="$this->todayAppointments" icon="calendar-days" color="blue" />
        <x-stats :title="'Pending'" :number="$this->pendingAppointments" icon="clock" color="yellow" />
        <x-stats :title="'In Queue'" :number="$this->inQueue" icon="queue-list" color="green" />
    </div>

    @if($this->nextAppointment)
        @php $next = $this->nextAppointment; @endphp
        <x-card color="primary">
            <x-slot:header>
                <div class="flex items-center gap-2">
                    <x-icon name="star" outline class="h-6 w-6" /> Next Appointment
                </div>
            </x-slot:header>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <x-avatar lg />
                    <div>
                        <p class="text-lg font-bold">{{ $next->patient->first_name }} {{ $next->patient->last_name }}</p>
                        <p class="text-sm">{{ \Illuminate\Support\Carbon::parse($next->scheduled_at)->format('l, F d, Y \a\t h:i A') }}</p>
                        @if($next->title)
                            <p class="text-sm text-gray-500">{{ $next->title }}</p>
                        @endif
                    </div>
                </div>
                <x-badge :text="ucfirst($next->status)" :color="$next->status === 'confirmed' ? 'blue' : ($next->status === 'pending' ? 'yellow' : 'zinc')" light />
            </div>
        </x-card>
    @else
        <x-card>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <x-icon name="calendar" outline class="h-6 w-6" />
                    <span>No upcoming appointments</span>
                </div>
                <a href="{{ route('clinician.appointments') }}">
                    <x-button text="View Schedule" />
                </a>
            </div>
        </x-card>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-1">
            <x-card>
                <x-slot:header>
                    <div class="flex items-center gap-2">
                        <x-icon name="bolt" outline class="h-6 w-6" /> Quick Actions
                    </div>
                </x-slot:header>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('clinician.appointments') }}" class="w-full">
                        <x-button text="View Appointments" icon="clock" class="w-full" />
                    </a>
                    <a href="{{ route('clinician.profile') }}" class="w-full">
                        <x-button text="My Profile" icon="user" outline class="w-full" />
                    </a>
                </div>
            </x-card>

            @if(count($todayRows) > 0)
                <x-card class="mt-6">
                    <x-slot:header>
                        <div class="flex items-center gap-2">
                            <x-icon name="calendar-days" outline class="h-6 w-6" /> Today's Schedule
                        </div>
                    </x-slot:header>
                    <div class="divide-y">
                        @foreach($todayRows as $appt)
                            <div class="flex items-center justify-between py-3">
                                <div>
                                    <p class="font-medium">{{ $appt->patient->first_name }} {{ $appt->patient->last_name }}</p>
                                    <p class="text-sm text-gray-500">{{ \Illuminate\Support\Carbon::parse($appt->scheduled_at)->format('h:i A') }}</p>
                                </div>
                                <x-badge :text="ucfirst($appt->status)" :color="$appt->status === 'confirmed' ? 'blue' : ($appt->status === 'pending' ? 'yellow' : 'zinc')" light xs />
                            </div>
                        @endforeach
                    </div>
                </x-card>
            @endif
        </div>

        <div class="lg:col-span-2">
            <x-card class="h-full">
                <x-slot:header>
                    <div class="flex items-center gap-2">
                        <x-icon name="queue-list" outline class="h-8 w-8" /> Appointment Queue
                    </div>
                    <a href="{{ route('clinician.appointments') }}">
                        <x-button icon="clock" text="Manage" outline />
                    </a>
                </x-slot:header>
                <x-table :headers="$queueHeaders" :rows="$queueRows" paginate loading>
                    @interact('column_patient_id', $row)
                    <div class="flex items-center gap-2">
                        <x-avatar sm />
                        <div>
                            <span class="font-bold">{{ $row['patient']['first_name'] . ' ' . $row['patient']['last_name'] }}</span>
                            <x-badge :text="'@' . $row['patient']['username']" xs />
                        </div>
                    </div>
                    @endinteract

                    @interact('column_appointment_id', $row)
                    <span>{{ $row['appointment']['title'] ?? '—' }}</span>
                    @endinteract

                    @interact('column_status', $row)
                    @php
                        $isPast = \Illuminate\Support\Carbon::parse($row['appointment']['scheduled_at'])->isPast();
                        $statusColor = match($row->status) {
                            'completed' => 'green',
                            'queued' => $isPast ? 'red' : 'blue',
                            'in_progress' => 'yellow',
                            'checked_out' => 'zinc',
                            'cancelled' => 'red',
                            default => 'zinc'
                        };
                    @endphp
                    <x-badge :text="ucfirst(str_replace('_', ' ', $row->status))" :color="$statusColor" light />
                    @endinteract
                </x-table>
            </x-card>
        </div>
    </div>

    <x-card>
        <x-slot:header>
            <div class="flex items-center gap-2">
                <x-icon name="calendar" outline class="h-8 w-8" /> Calendar
            </div>
        </x-slot:header>
        <div id="calendar" class="min-h-[500px] w-full"></div>
    </x-card>
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
}, 500);
</script>
@endscript
