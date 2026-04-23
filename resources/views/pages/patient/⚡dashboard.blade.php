<?php

use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new
    #[Layout('layouts::patient')]
    class extends Component
    {
        use WithPagination;

        #[Computed]
        public function totalAppointments()
        {
            return Appointment::where('patient_id', auth()->id())->count();
        }

        #[Computed]
        public function upcomingAppointments()
        {
            return Appointment::where('patient_id', auth()->id())
                ->where('scheduled_at', '>', now())
                ->count();
        }

        #[Computed]
        public function completedAppointments()
        {
            return Appointment::where('patient_id', auth()->id())
                ->where('status', 'completed')
                ->count();
        }

        #[Computed]
        public function pendingAppointments()
        {
            return Appointment::where('patient_id', auth()->id())
                ->where('status', 'pending')
                ->count();
        }

        #[Computed]
        public function nextAppointment()
        {
            return Appointment::with('clinician')
                ->where('patient_id', auth()->id())
                ->where('scheduled_at', '>', now())
                ->orderBy('scheduled_at')
                ->first();
        }

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'clinician_id', 'label' => 'Clinician name'],
                    ['index' => 'title', 'label' => 'Title'],
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::with('clinician')
                    ->where('patient_id', auth()->id())
                    ->where('scheduled_at', '>', now())
                    ->orderBy('scheduled_at')
                    ->paginate(10)
            ];
        }
    };
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Welcome back, {{ ucfirst(auth()->user()->first_name ?: auth()->user()->username) }}</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-stats :title="'Total Appointments'" :number="$this->totalAppointments" icon="calendar-days" />
        <x-stats :title="'Upcoming'" :number="$this->upcomingAppointments" icon="clock" color="blue" />
        <x-stats :title="'Completed'" :number="$this->completedAppointments" icon="check-circle" color="green" />
        <x-stats :title="'Pending'" :number="$this->pendingAppointments" icon="clock" color="yellow" />
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
                        <p class="text-lg font-bold">{{ $next->clinician->first_name }} {{ $next->clinician->last_name }}</p>
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
                <a href="{{ route('patient.calendar') }}">
                    <x-button text="Book Appointment" />
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
                    <a href="{{ route('patient.calendar') }}" class="w-full">
                        <x-button text="Book Appointment" icon="calendar" class="w-full" />
                    </a>
                    <a href="{{ route('patient.medical-records') }}" class="w-full">
                        <x-button text="Medical Records" icon="rectangle-stack" outline class="w-full" />
                    </a>
                    <a href="{{ route('patient.profile') }}" class="w-full">
                        <x-button text="My Profile" icon="user" outline class="w-full" />
                    </a>
                </div>
            </x-card>
        </div>

        <div class="lg:col-span-2">
            <x-card class="h-full">
                <x-slot:header>
                    <div class="flex gap-2 items-center">
                        <x-icon name="clock" outline class="h-8 w-8" /> Upcoming Appointments
                    </div>
                    <a href="{{ route('patient.appointments') }}">
                        <x-button icon="clock" text="View All" outline />
                    </a>
                </x-slot:header>
                <x-table :$headers :$rows paginate loading>
                    @interact('column_clinician_id', $row)
                    <div class="flex items-center gap-3">
                        <x-avatar sm />
                        <div>
                            <span class="font-bold">{{ $row['clinician']['first_name'] . ' ' . $row['clinician']['last_name'] }}</span>
                            <div class="mt-2">
                                <x-badge :text="'@' . $row['clinician']['username']" />
                            </div>
                        </div>
                    </div>
                    @endinteract

                    @interact('column_scheduled_at', $row)
                    <span>{{ \Illuminate\Support\Carbon::parse($row->scheduled_at)->format('M d, Y h:i A') }}</span>
                    @endinteract

                    @interact('column_status', $row)
                    @php
                        $statusColor = match($row->status) {
                            'completed' => 'green',
                            'confirmed' => 'blue',
                            'pending' => 'yellow',
                            'cancelled' => 'red',
                            default => 'zinc'
                        };
                    @endphp
                    <x-badge :text="ucfirst($row->status)" :color="$statusColor" light />
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
            <a href="{{ route('patient.calendar') }}">
                <x-button text="Book appointment" />
            </a>
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
}, 500);
</script>
@endscript
