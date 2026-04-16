<?php

use App\Models\Appointment;
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
                    ['id' => 'patient_id', 'label' => 'Patient name'],
                    ['id' => 'treatment_id', 'label' => 'Treatment'],
                    ['id' => 'scheduled_at', 'label' => 'Scheduled at'],
                    ['id' => 'status', 'label' => 'Status'],
                ],
                'rows' => Appointment::all()
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
            <x-card>
                <x-slot:header>
                    <x-icon name="user-circle" outline class="h-8 w-8" /> Recent Appointments
                </x-slot:header>
                <x-table :$headers :$rows />
            </x-card>
        </div>
        <div class="basis-1/2">
            <x-card>
                <x-slot:header>
                    <x-icon name="folder-open" outline class="h-8 w-8" /> Treatments
                </x-slot:header>
            </x-card>
        </div>
    </div>
</div>
