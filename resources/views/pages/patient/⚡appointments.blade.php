<?php


use App\Models\Appointment;
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

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'doctor_id', 'label' => 'Doctor name'],
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'notes', 'label' => 'Notes'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::with('doctor')->get()
            ];
        }

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

        public function save()
        {
            $this->validate();
            Appointment::create([
                'doctor_id' => $this->clinician,
                'patient_id' => auth()->user()->id,
                'scheduled_at' => $this->schedule,
                'notes' => $this->notes,
            ]);
            $this->toast()->success('Appointment saved')->send();
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
    <x-card>
        <x-slot:header>
            Appointments
            <a href="{{ route('patient.calendar') }}">
                <x-button text="Calendar" icon="calendar" />
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

