<?php


use Livewire\Attributes\Layout;
use Livewire\Component;
new #[Layout('layouts::admin')] class extends Component {
    //
};
?>

<div>
    <div class="mb-6">
        <p>Welcome, {{ auth()->user()->username }}</p>
    </div>
    <div class="flex gap-3 mb-6">
        <div class="basis-1/4">
            <x-stats title="Total Branches" :number="23" icon="rectangle-stack" />
        </div>
        <div class="basis-1/4">
            <x-stats title="Total Doctors" :number="147" icon="swatch" color="green" />
        </div>
        <div class="basis-1/4">
            <x-stats title="Total Patients" :number="2459" icon="rectangle-stack" color="zinc" />
        </div>
        <div class="basis-1/4">
            <x-stats title="Total Appointments" :number="546" icon="swatch" color="yellow" />
        </div>
    </div>
    <div class="flex gap-3 mb-6">
        <div class="basis-1/2">
            <x-card>
                <x-slot:header>
                    <x-icon name="user-circle" outline class="h-8 w-8" /> Recent Patients
                </x-slot:header>
            </x-card>
        </div>
        <div class="basis-1/2">
            <x-card>
                <x-slot:header>
                    <x-icon name="folder-open" outline class="h-8 w-8" /> Logs
                </x-slot:header>
            </x-card>
        </div>
    </div>
</div>
