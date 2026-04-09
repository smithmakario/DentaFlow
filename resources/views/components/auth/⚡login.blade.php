<?php

use Livewire\Component;

new class extends Component {
    public function save(): void
    {
        $this->redirect('/');
    }
};
?>

<div>
    <div class="min-h-screen bg-gray-50 flex justify-center items-center">
        <div class="basis-1/3">
            <x-card>
                <h1 class="mb-6 text-2xl font-bold text-center">Dental Flow</h1>
                <form wire:submit="save">
                    <div class="mb-6">
                        <x-input label="Username *" placeholder="Enter username" />
                    </div>
                    <div class="mb-6">
                        <x-password label="Password *"  placeholder="Enter password" />
                        <div class="text-end mt-2">
                            <x-link href="#" text="Forgot Password" />
                        </div>
                    </div>
                    <x-button submit text="Sign In" class="w-full"/> 
                </form>
            </x-card>
        </div>
    </div>
</div>
