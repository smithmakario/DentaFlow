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
                    ['index' => 'clinician_id', 'label' => 'Clinician name'],
                    ['index' => 'title', 'label' => 'Title'], 
                    ['index' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['index' => 'documents', 'label' => 'Documents'],
                    ['index' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::with('clinician', 'documents')->get()
            ];
        }

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
            <x-button type="submit" text="Book now!" loading />
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

            @interact('column_documents', $row)
            @if($row->documents->count() > 0)
                <div class="flex items-center gap-1">
                    <x-icon name="paper-clip" class="h-4 w-4" />
                    <span class="text-sm">{{ $row->documents->count() }} file(s)</span>
                </div>
            @else
                <span class="text-sm text-gray-400">—</span>
            @endif
            @endinteract

            @interact('column_status', $row)
            <x-badge :text="$row['status']" color="zinc"/>
            @endinteract
        </x-table>
    </x-card>
</div>

