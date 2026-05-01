<?php


use Illuminate\Validation\ValidationException;
use Livewire\Component;

new class extends Component {
    public $username;

    public $password;

    public $user_type = 'admin';

    public $remember = true;

    public function save()
    {
        $credentials = $this->only('username', 'password');
        if (filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
            $credentials = [
                'email' => $this->username,
                'password' => $this->password,
            ];
        }
        if (auth()->attempt($credentials, $this->remember)) {
            return redirect('/admin');
        }
        throw ValidationException::withMessages(['username' => 'Credentials not found']);
    }
};
?>

<div>
    <div class="min-h-screen bg-gray-50 flex justify-center items-center">
        <div class="basis-1/3">
            <x-card>
                <h1 class="mb-6 text-2xl font-bold text-center">Dental Flow Admin</h1>
                <form wire:submit="save">
                    @csrf
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
                    <x-button submit text="Sign In" class="w-full" loading />
                </form>
            </x-card>
        </div>
    </div>
</div>
