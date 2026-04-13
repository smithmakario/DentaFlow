<?php

use Livewire\Component;

new class extends Component
{
    public $username;

    public $password;

    public $remember = true;

    public function save(): void
    {
        $credentials = $this->only('username', 'password');
    }
};
?>

<div>
    <div class="min-h-screen bg-gray-50 flex justify-center items-center">
        <div class="basis-1/3">
            <x-card>
                <h1 class="mb-6 text-2xl font-bold text-center">Welcome back</h1>
                <form wire:submit="save">
                    <div class="mb-6">
                        <x-input label="Username or email *" placeholder="Enter username or email" wire:model="username" />
                    </div>
                    <div class="mb-6">
                        <x-password label="Password *"  placeholder="Enter password" wire:model="password"/>
                    </div>
                    <div class="flex mb-6 justify-between items-center">
                        <x-checkbox label="Rember me" wire:model="remember" />
                        <x-link href="{{ route('forgot-password') }}" text="Forgot Password"   />
                    </div>
                    <x-button submit text="Sign In" class="w-full"/>
                </form>
                <p class="mt-6 text-center">Don't have an account? <x-link href="{{ route('register') }}" text="Sign Up" /></p>
            </x-card>
        </div>
    </div>
</div>
