<?php

use App\Mail\ClinicRegistrationMail;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::admin')]
    class extends Component
    {
        use Interactions;

        #[Validate('required')]
        public string $clinic_name = '';

        public string $clinic_address = '';

        public string $contact_number = '';

        #[Validate('required')]
        public string $subdomain = '';

        #[Validate('required')]
        public string $sub_type = 'silver';

        #[Validate('required')]
        public string $admin_user = '';

        #[Validate('required')]
        public string $admin_email = '';

        #[Validate('required')]
        public string $admin_password = '';

        #[Validate('required')]
        public int $branch_no = 1;

        public int $step = 1;

        public string $clinic_type = 'General Dentistry';

        public array $clinic_types = [
            'General Dentistry',
            'Orthodontics',
            'Pediatric Dentistry',
            'Periodontics',
            'Multi-Specialty'
        ];

        public function save(): void
        {
            $this->validate();
            $profile_data = [
                'clinic_name' => $this->clinic_name,
                'address' => $this->clinic_address,
                'telephone' => $this->contact_number,
                'specialization' => $this->clinic_type,
                'branch_no' => $this->branch_no,
                'sub_type' => $this->sub_type,
                'status' => 'active',
            ];
            $admin_data = [
                'first_name' => $this->admin_user,
                'last_name' => $this->admin_user,
                'username' => $this->admin_user,
                'email' => $this->admin_email,
                'password' => Hash::make($this->admin_password),
                'role' => 'clinic_admin',
            ];
            $tenant = Tenant::create(['id' => $this->subdomain]);
            $tenant->run(function () use ($admin_data) {
                User::create($admin_data);
            });
            $tenant->clinic_profile()->create($profile_data);
            $domain_name = "{$this->subdomain}.localhost";
            if (App::isProduction()) {
                $domain_name = $this->subdomain . '.' . request()->getHttpHost();
            }
            $tenant->domains()->create(['domain' => $domain_name]);
            Mail::to($this->admin_email)->send(new ClinicRegistrationMail($this->clinic_name));
            $this->toast()->success('Registration Successful')->send();
        }
    };
?>

<div>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-xl">New Clinic Onboarding</h1>
            <p class="text-gray-400">Oversee and manage all active dental networks and individual practices on the platform</p>
        </div>
    </div>
    <div>
        <form method="post" wire:submit="save">
        <x-card>
            <x-step selected="1" panels  helpers navigate navigate-previous wire:model="step">
                <x-step.items step="1" title="Clinic Profile" description="Step One">
                    <div class="mb-6">
                        <x-upload label="Clinic Logo" wire:model="clinic_logo" />
                    </div>
                    <div class="flex gap-3 mb-6">
                        <div class="basis-1/2">
                            <x-input label="Clinic name *" placeholder="Enter clinic name" wire:model="clinic_name" />
                        </div>
                        <div class="basis-1/2">
                            <x-input label="Subdomain *" placeholder="Enter subdomain" wire:model="subdomain" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <x-input label="Address" placeholder="Enter clinic address" wire:model="clinic_address" />
                    </div>
                    <div class="mb-6">
                        <x-input label="Contact number" placeholder="Contact number"  wire:model="contact_number"/>
                    </div>
                    <div class="mb-6">
                        <x-select.styled label="Specialization *" placeholder="Select Specialization" :options="$clinic_types"  wire:model="clinic_type" />
                    </div>
                </x-step.items>
                <x-step.items step="2" title="Branches" description="Step Two">
                    <div class="mb-6">
                        <x-number label="No. of Branches" placeholder="Enter number of branches"  wire:model="branch_no"/>
                    </div>
                </x-step.items>
                <x-step.items step="3" title="Clinic Admin" description="Step Three">
                    <div class="mb-6">
                        <x-input label="Admin user *" placeholder="Enter username"  wire:model="admin_user"/>
                    </div>
                    <div class="mb-6">
                        <x-input label="Admin email *" placeholder="Enter email" wire:model="admin_email" />
                    </div>
                    <div class="mb-6">
                        <x-password label="Admin password *" placeholder="Enter password" wire:model="admin_password" />
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
                            <x-radio id="silver" value="silver" name="subscription" wire:model="sub_type" color="green">
                                <x-slot:label middle>
                                    <div class="text-xl text-green-400">Silver</div>
                                    <span>₦10,000.00</span>
                                </x-slot:label>
                            </x-radio>
                        </label>
                        <label for="gold" class="p-3 border-1 border-yellow-400 w-full rounded-md">
                            <x-radio id="gold" value="gold" name="subscription" wire:model="sub_type" color="yellow">
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
