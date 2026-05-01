<?php

use TallStackUi\Traits\Interactions;


use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;


use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::clinician')] class extends Component
{
    use WithFileUploads;
    use Interactions;

    public $avatar;

    #[Validate('required')]
    public $first_name;

    #[Validate('required')]
    public $last_name;

    public $dob;

    public $address;

    public $gender;

    public $specialization;

    public $license_number;

    public $years_of_experience;

    public function mount()
    {
        $user = auth()->user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $profile = $user->userProfile;
        $this->specialization = $profile?->specialization;
        $this->license_number = $profile?->license_number;
        $this->years_of_experience = $profile?->years_of_experience;
    }

    public function save()
    {
        auth()->user()->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name
        ]);
        auth()->user()->userProfile()->updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'gender' => $this->gender,
                'date_of_birth' => $this->dob,
                'address' => $this->address,
                'specialization' => $this->specialization,
                'license_number' => $this->license_number,
                'years_of_experience' => $this->years_of_experience,
            ]
        );
        $this->toast()->success('Profile saved')->send();
    }
};
?>

<div>
    <x-card header="Profile">
        <form action="" wire:submit="save">
            <div class="flex gap-3 mb-6">
                <div class="basis-1/2">
                    <x-input label="First name *" placeholder="Enter first name" wire:model="first_name" />
                </div>
                <div class="basis-1/2">
                    <x-input label="Last name *" placeholder="Enter last name" wire:model="last_name" />
                </div>
            </div>
            <div class="flex gap-3 mb-6">
                <div class="basis-1/2">
                    <x-date label="Date of birth" placeholder="Enter birthday" wire:model="dob" />
                </div>
                <div class="basis-1/2">
                    <x-select.styled label="Gender" :options="['Male', 'Female']" wire:model="gender" />
                </div>
            </div>
            <div class="flex gap-3 mb-6">
                <div class="basis-1/2">
                    <x-select.styled label="Specialization" :options="[
                        ['label' => 'General Dentistry', 'value' => 'General Dentistry'],
                        ['label' => 'Orthodontics', 'value' => 'Orthodontics'],
                        ['label' => 'Periodontics', 'value' => 'Periodontics'],
                        ['label' => 'Endodontics', 'value' => 'Endodontics'],
                        ['label' => 'Oral Surgery', 'value' => 'Oral Surgery'],
                        ['label' => 'Pediatric Dentistry', 'value' => 'Pediatric Dentistry'],
                        ['label' => 'Prosthodontics', 'value' => 'Prosthodontics'],
                        ['label' => 'Cosmetic Dentistry', 'value' => 'Cosmetic Dentistry'],
                        ['label' => 'Oral Medicine', 'value' => 'Oral Medicine'],
                        ['label' => 'Oral Pathology', 'value' => 'Oral Pathology'],
                    ]" wire:model="specialization" />
                </div>
                <div class="basis-1/2">
                    <x-input label="Address" placeholder="Enter address" wire:model="address" />
                </div>
            </div>
            <div class="flex gap-3 mb-6">
                <div class="basis-1/2">
                    <x-input label="License number" placeholder="e.g. DEN/12345" wire:model="license_number" />
                </div>
                <div class="basis-1/2">
                    <x-input label="Years of experience" placeholder="e.g. 5" wire:model="years_of_experience" />
                </div>
            </div>
            <div class="mb-6">
                <x-upload wire:model="avatar" placeholder="Profile picture" />
            </div>
            <x-button type="submit" text="Save" loading />
        </form>
    </x-card>
</div>
