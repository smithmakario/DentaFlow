<?php
use App\Models\Appointment;
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
                    ['id' => 'doctor_name', 'label' => 'Doctor name'],
                    ['id' => 'treatment_id', 'label' => 'Treatment'],
                    ['id' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['id' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::all()
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
            });
        }

        public function save()
        {

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
        <form action="" wire:modal="save">
            <div class="mb-6">
                <x-select.styled label="Clinician *" :options="$this->clinicians" wire:model="clinician" />
            </div>
            <div class="mb-6">
               <x-date label="Schedule *" placeholder="Select schedule date" wire:model="schedule" />
            </div>
            <div class="mb-6">
                <x-textarea label="Notes" placeholder="Add notes" wire:model="notes" />
            </div>
            <x-button type="submit" text="Book now!" />
        </form>
    </x-modal>
    <x-card>
        <x-slot:header>
            Appointments
            <x-button text="Create Appointment" icon="plus" x-on:click="$tsui.open.modal('app-modal')" />
        </x-slot:header>
        <x-table :$headers :$rows />
    </x-card>
</div>
