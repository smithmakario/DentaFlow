<?php

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

        public $clinician;

        public $schedule;

        public $notes = '';

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'patient_id', 'label' => 'Patient name'],
                    ['index' => 'appointment_id', 'label' => 'Title'],
                    ['index' => 'position', 'label' => 'Position'],
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'status', 'label' => 'Status'],
                    ['index' => 'action', 'label' => 'Action'],
                ],
                'rows' => AppointmentQueue::with('appointment')->get()
            ];
        }
    };
?>

<div>
    <x-card>
        <x-slot:header>
            Appointments
            <x-button text="Schedule" icon="calendar" />
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
            @interact('column_appointment_id', $row)
            <span>{{ $row['appointment']['title'] }}</span>
            @endinteract
            @interact('column_action', $row)
                <x-button text="Edit" icon="pencil" />
            @endinteract
        </x-table>
    </x-card>
</div>
