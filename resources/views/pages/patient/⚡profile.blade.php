<?php

use TallStackUi\Traits\Interactions;


use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;


use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::patient')] class extends Component
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

    public $blood_type;

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
    }

    public function save()
    {
        auth()->user()->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name
        ]);
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
                    <x-date label="Date of birth" placeholder="Enter birthday" />
                </div>
                <div class="basis-1/2">
                    <x-select.styled label="Gender" :options="['Male', 'Female']" />
                </div>
            </div>
            <div class="flex gap-3 mb-6">
                <div class="basis-1/2">
                    <x-input label="Blood type" placeholder="Enter blood type" />
                </div>
                <div class="basis-1/2">
                    <x-input label="Address" placeholder="Enter address" />
                </div>
            </div>
            <div class="mb-6">
                <x-upload wire:model="avatar" placeholder="Profile picture" />
            </div>
            <x-button type="submit" text="Save" />
        </form>
    </x-card>
</div>
