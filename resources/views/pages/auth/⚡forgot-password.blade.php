<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div>
        <div class="min-h-screen bg-gray-50 flex justify-center items-center">
            <div class="basis-1/3">
                <x-card>
                    <h1 class="mb-6 text-2xl font-bold text-center">Reset Password</h1>
                    <form wire:submit="save">
                        <div class="mb-6">
                            <x-input label="Email *" placeholder="Enter email" />
                        </div>
                        <x-button submit text="Send reset link" class="w-full" loading />
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</div>

