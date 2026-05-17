<?php


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

new class extends Component
{
    public UserForm $form;

    public function save()
    {
        $this->validate();
        $user = $this->form->save();

        Auth::login($user);

        $role = $user->role;
        $redirects = [
            'doctor' => route('clinician.dashboard'),
            'receptionist' => route('clinician.dashboard'),
            'nurse' => route('clinician.dashboard'),
            'accountant' => route('clinician.dashboard'),
            'lab_tech' => route('clinician.dashboard'),
            'clinic_admin' => route('clinician.dashboard'),
        ];
        return redirect()->intended($redirects[$role] ?? route('patient.dashboard'));
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
                            <x-radio label="Patient" id="patient" value="patient" name="role" wire:model="form.role" />
                        </label>
                        <label for="staff" class="p-3 border-1 border-green-400 w-full rounded-md shadow">
                            <x-radio label="Staff" id="staff" value="doctor" name="role" wire:model="form.role" color="green"/>
                        </label>
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
                    <x-button submit text="Sign Up" class="w-full" loading /> 
                </form>
                <p class="mt-6 text-center">Already have an account? <x-link href="{{ route('login') }}" text="Sign in" /></p>
            </x-card>
        </div>
    </div>
</div>
