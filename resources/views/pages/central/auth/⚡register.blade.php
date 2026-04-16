<?php





use App\Livewire\Forms\UserForm;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    public UserForm $form;

    #[Validate('required')]
    public $tenant;

    public function save()
    {
        $this->validate();
        $tenant = Tenant::find($this->tenant);
        $user_type = null;
        $tenant->run(function () use(&$user_type) {
            $user = $this->form->save();
            $user_type = $user->user_type;
            Auth::login($user);
        });
        $domain = $tenant->domains()->first();
        $url = request()->getScheme() . "://{$domain->domain}";
        if (app()->environment('local')) {
            $url .= ':' . request()->getPort();
        }
        return redirect($url . "/{$user_type}");
    }

    #[Computed]
    public function tenants()
    {
        return \App\Models\Tenant::all()->map(fn($tenant) => $tenant->id);
    }
};
?>

<div>
    <div class="min-h-screen bg-gray-50 flex justify-center items-center">
        <div class="basis-1/3">
            <x-card>
                <h1 class="mb-6 text-2xl font-bold text-center">Dental Flow</h1>
                <form wire:submit="save">
                    <div class="flex gap-3 mb-6 justify-center">
                        <label for="patient" class="p-3 border-1 round-6 border-primary-400 w-full rounded-md shadow">
                            <x-radio label="Patient" id="patient" value="patient" name="user_type" wire:model="form.user_type" />
                        </label>
                        <label for="clinician" class="p-3 border-1 border-green-400 w-full rounded-md shadow">
                            <x-radio label="Clinician" id="clinician" value="clinician" name="user_type" wire:model="form.user_type" color="green"/>
                        </label>
                    </div>
                    <div class="mb-6">
                        <x-select.styled label="Choose branch *" placeholder="Enter branch" :options="$this->tenants" wire:model="tenant" />
                    </div>
                    <div class="flex mb-6 gap-3">
                        <div class="basis-1/2">
                            <x-input label="First name *" placeholder="Enter first name" wire:model="form.first_name"/>
                        </div>
                        <div class="basis-1/2">
                            <x-input label="Last name *" placeholder="Enter last name" wire:model="form.last_name"/>
                        </div>
                    </div>
                    <div class="flex mb-6 gap-3">
                        <div class="basis-1/2">
                            <x-input label="Username *" placeholder="Enter username"  wire:model="form.username"/>
                        </div>
                        <div class="basis-1/2">
                            <x-input label="Email *" placeholder="Enter email address" wire:model="form.email"/>
                        </div>
                    </div>
                    <div class="mb-6">
                        <x-input type="number" label="Phone no" placeholder="Enter phone number" wire:model="form.phone_number" />
                    </div>
                    <div class="flex gap-3 mb-6">
                        <div class="basis-1/2">
                            <x-password label="Password *"  placeholder="Enter password"  wire:model="form.password"/>
                        </div>
                        <div class="basis-1/2">
                            <x-password label="Confirm Password *"  placeholder="Enter password"  wire:model="form.confirm_password"/>
                        </div>
                    </div>
                    <x-button submit text="Sign Up" class="w-full"/>
                </form>
                <p class="mt-6 text-center">Already have an account? <x-link href="{{ route('login') }}" text="Sign in" /></p>
            </x-card>
        </div>
    </div>
</div>
