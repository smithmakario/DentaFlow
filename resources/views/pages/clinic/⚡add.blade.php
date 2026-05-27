<?php

use App\Mail\ClinicRegistrationMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public string $clinic_name = '';

    public string $sub_type = 'bronze';

    public string $admin_email = '';

    public int $branch_no = 1;

    public int $step = 1;

    public array $clinic_types = [
        'General Dentistry',
        'Orthodontics',
        'Pediatric Dentistry',
        'Periodontics',
        'Multi-Specialty'
    ];

    public function save(): void
    {
        Mail::to($this->admin_email)->send(new ClinicRegistrationMail($this->clinic_name));
        $this->toast()->success('Registration Successful')->send();
    }
};
?>

<div class="min-h-screen flex bg-gray-100 justify-center items-center">
    <x-toast />
    <div class="basis-1/2">
        <form method="post" wire:submit="save">
        <x-card>
            <x-step selected="1" panels helpers previous wire:model="step">
                <x-step.items step="1" title="Clinic Profile" description="Step One">
                    <div class="mb-6">
                        <x-upload label="Clinic Logo" wire:model="clinic_logo" />
                    </div>
                    <div class="mb-6">
                        <x-input label="Clinic name *" placeholder="Enter clinic name" wire:model="clinic_name" />
                    </div>
                    <div class="mb-6">
                        <x-input label="Address *" placeholder="Enter clinic address" wire:model="address" />
                    </div>
                    <div class="mb-6">
                        <x-input label="Contact number *" placeholder="Contact number" />
                    </div>
                    <div class="mb-6">
                        <x-select.styled placeholder="Select Specialization" :options="$clinic_types" />
                    </div>
                </x-step.items>
                <x-step.items step="2" title="Branches" description="Step Two">
                    <div class="mb-6">
                        <x-number label="No. of Branches" placeholder="Enter number of branches"  wire:model="branch_no"/>
                    </div>
                </x-step.items>
                <x-step.items step="3" title="Clinic Admin" description="Step Three">
                    <div class="mb-6">
                        <x-input label="Admin user *" placeholder="Enter username" />
                    </div>
                    <div class="mb-6">
                        <x-input label="Admin email *" placeholder="Enter email" wire:model="admin_email" />
                    </div>
                    <div class="mb-6">
                        <x-password label="Admin password *" placeholder="Enter password" />
                    </div>
                </x-step.items>
                <x-step.items step="4" title="Subscriptions" description="Step Four">
                    <div class="flex gap-3 mb-6 justify-center">
                        <label for="bronze" class="p-3 border-1 round-6 border-primary-400 w-full rounded-md">
                            <x-radio id="bronze" value="bronze" name="subscription" wire:model="sub_type">
                                <x-slot:label middle>
                                    <div class="text-xl text-primary-400">Bronze</div>
                                    <span>₦5,000.00</span>
                                </x-slot:label>
                            </x-radio>
                        </label>
                        <label for="silver" class="p-3 border-1 border-green-400 w-full rounded-md">
                            <x-radio id="silver" value="Silver" name="subscription" wire:model="sub_type" color="green">
                                <x-slot:label middle>
                                    <div class="text-xl text-green-400">Silver</div>
                                    <span>₦10,000.00</span>
                                </x-slot:label>
                            </x-radio>
                        </label>
                        <label for="gold" class="p-3 border-1 border-yellow-400 w-full rounded-md">
                            <x-radio id="gold" value="Gold" name="subscription" wire:model="sub_type" color="yellow">
                                <x-slot:label middle>
                                    <div class="text-xl text-yellow-400">Gold</div>
                                    <span>₦50,000.00</span>
                                </x-slot:label>
                            </x-radio>
                        </label>
                    </div>
                    <x-button type="submit" text="Finish" color="primary" class="float-right" loading />
                </x-step.items>
            </x-step>
        </x-card>
        </form>
    </div>
</div>
