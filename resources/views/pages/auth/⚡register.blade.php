<?php

use Livewire\Component;

new class extends Component
{
    public function save()
    {
        return redirect('/');
    }
};
?>

<div>
    <div class="min-h-screen bg-gray-50 flex justify-center items-center">
        <div class="basis-1/3">
            <x-card>
                <h1 class="mb-6 text-2xl font-bold text-center">Dental Flow</h1>
                <form wire:submit="save">
                    <div class="flex mb-6 gap-3">
                        <div class="basis-1/2">
                            <x-input label="First name *" placeholder="Enter first name" />
                        </div>
                        <div class="basis-1/2">
                            <x-input label="Last name *" placeholder="Enter last name" />
                        </div>
                    </div>
                    <div class="flex mb-6 gap-3">
                        <div class="basis-1/2">
                            <x-input label="Username *" placeholder="Enter username" />
                        </div>
                        <div class="basis-1/2">
                            <x-input label="Email *" placeholder="Enter email address" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <x-input type="number" label="Phone no *" placeholder="Enter phone number" />
                    </div>
                    <div class="mb-6">
                        <x-password label="Password *"  placeholder="Enter password" />
                    </div>
                    <x-button submit text="Sign Up" class="w-full"/> 
                </form>
                <p class="mt-6 text-center">Already have an account? <x-link href="{{ route('login') }}" text="Sign in" /></p>
            </x-card>
        </div>
    </div>
</div>
