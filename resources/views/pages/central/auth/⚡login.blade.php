<?php




use App\Models\Tenant;
use App\Services\TokenGeneratorService;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    #[Validate('required')]
    public $username;

    #[Validate('required')]
    public $password;

    public $role = 'patient';

    public $remember = true;

    #[Validate('required')]
    public $tenant;

    #[Computed]
    public function tenants()
    {
        return \App\Models\Tenant::all()->map(fn ($tenant) => $tenant->id);
    }

    public function save(TokenGeneratorService $tokenGenerator)
    {
        $this->validate();
        $credentials = $this->only('username', 'password');
        if (filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
            $credentials = [
                'email' => $this->username,
                'password' => $this->password,
            ];
        }
        $remember = $this->remember;
        $tenant = Tenant::find($this->tenant);
        $loggedin = false;
        $user = null;
        $tenant->run(function () use(&$user, &$loggedin, $credentials, $remember) {
            if (auth()->attempt($credentials, $remember)) {
                $loggedin = true;
                $user = auth()->user();
            }
        });
        if (!$loggedin) {
            throw ValidationException::withMessages(['username' => 'Credentials not found']);
        }

        $token = $tokenGenerator->signed([
            'user_id' => $user->id, 
            'role' => $this->role
        ]);
        $domain = $tenant->domains()->first();
        $url = request()->getScheme() . "://{$domain->domain}";
        if (app()->environment('local')) {
            $url .= ':' . request()->getPort();
        }
        return redirect($url . "/{$token}/login");
    }
};
?>

<div>
    <div class="min-h-screen bg-gray-50 flex justify-center items-center">
        <div class="basis-1/3">
            <x-card>
                <h1 class="mb-6 text-2xl font-bold text-center">Welcome back</h1>
                <form wire:submit="save">
                    @csrf
                    <div class="flex gap-3 mb-6 justify-center">
                        <label for="patient" class="p-3 border-1 round-6 border-primary-400 w-full rounded-md shadow">
                            <x-radio label="Patient" id="patient" value="patient" name="role" wire:model="role" />
                        </label>
                        <label for="staff" class="p-3 border-1 border-green-400 w-full rounded-md shadow">
                            <x-radio label="Staff" id="staff" value="doctor" name="role" wire:model="role" color="green"/>
                        </label>
                    </div>
                    <div class="mb-6">
                        <x-select.styled label="Choose branch *" placeholder="Enter branch" :options="$this->tenants" wire:model="tenant" />
                    </div>
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
                <p class="mt-6 text-center">Don't have an account? <x-link href="{{ route('register') }}" text="Sign Up" /></p>
            </x-card>
        </div>
    </div>
</div>
