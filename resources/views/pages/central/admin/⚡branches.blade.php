<?php


use App\Models\GlobalUser;
use App\Models\Tenant;
use App\Models\User;
use App\Services\TokenGeneratorService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Stancl\Tenancy\Database\Models\Domain;
use TallStackUi\Traits\Interactions;

new #[Layout('layouts::admin')] class extends Component
{
    use Interactions;

    #[Validate('required|unique:tenants,id')]
    public $tenant;

    public function with(): array
    {
        $tenants = Tenant::with('domains')->latest()->get();

        return [
            'headers' => [
                ['index' => 'id', 'label' => 'Branch'],
                ['index' => 'domain', 'label' => 'Domain'],
                ['index' => 'users_count', 'label' => 'Users'],
                ['index' => 'created_at', 'label' => 'Created'],
                ['index' => 'action', 'label' => 'Action'],
            ],
            'rows' => $tenants,
            'totalBranches' => Tenant::count(),
            'totalDomains' => Domain::count(),
            'newestBranch' => $tenants->first(),
        ];
    }

    public function login(TokenGeneratorService $tokenGenerator, $tenant)
    {
        $user = auth()->user();
        $token = $tokenGenerator->signed([
            'user_id' => $user->id,
            'username' => $user->username,
            'user_type' => 'clinician',
        ]);
        $tenant = Tenant::find($tenant);
        $domain = $tenant->domains()->first();
        $url = request()->getScheme() . "://{$domain->domain}";
        if (app()->environment('local')) {
            $url .= ':' . request()->getPort();
        }
        $this->dispatch('open-url', url: $url . "/{$token}/login");
    }

    public function save()
    {
        $this->validate();
        $tenant = Tenant::create(['id' => $this->tenant]);
        if (app()->environment('local')) {
            $tenant->domains()->create(['domain' => "{$this->tenant}.localhost"]);
        } else {
            $tenant->domains()->create(['domain' => "{$this->tenant}.". request()->getHost()]);
        }
        $user = auth()->user();
        $tenant->run(function() use($user) {
            $data = $user->toArray();
            $data['password'] = $user->password;
            User::create($data);
        });
        $this->toast()->success('Branch created')->send();
    }
};
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Branches</p>
        <p class="text-sm text-gray-500">Manage all clinic branches</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <x-stats :title="'Total Branches'" :number="$totalBranches" icon="rectangle-stack" />
        <x-stats :title="'Domains'" :number="$totalDomains" icon="globe-alt" color="blue" />
        <x-stats :title="'Newest Branch'" :number="$newestBranch ? $newestBranch->id : 0" icon="clock" color="green" />
    </div>

    <x-modal title="Add Branch" id="modal-branch" x-on:close-modal.window="$tsui.close.modal('modal-branch')">
        <form wire:submit="save" class="space-y-4">
            <p class="text-sm text-gray-500">A new database will be created for this branch with its own isolated data.</p>
            <x-input label="Branch name *" placeholder="e.g. downtown, uptown" wire:model="tenant">
                <x-slot:suffix button>
                    @if(app()->environment('local'))
                    <x-button text=".localhost" sm />
                    @else
                    <x-button text=".{{ request()->getHost() }}" sm />
                    @endif
                </x-slot:suffix>
            </x-input>
            <p class="text-xs text-gray-400">Domain will be: <span class="font-mono">{{ $tenant ?: '{name}' }}@if(app()->environment('local')).localhost@else.{{ request()->getHost() }}@endif</span></p>
            <x-button type="submit" text="Create Branch" icon="plus" class="w-full" loading />
        </form>
    </x-modal>

    <x-card>
        <x-slot:header>
            <span>All Branches</span>
            <x-button text="Add Branch" icon="plus" x-on:click="$tsui.open.modal('modal-branch')" />
        </x-slot:header>
        <x-table :$headers :$rows>
            @interact('column_id', $row)
            <x-badge :text="$row->id" color="primary" light />
            @endinteract

            @interact('column_domain', $row)
            @php $domain = $row->domains->first(); @endphp
            @if($domain)
            <div class="flex items-center gap-2">
                <span class="font-mono text-sm">{{ $domain->domain }}</span>
                <a href="http://{{ $domain->domain }}:{{ request()->getPort() }}" target="_blank">
                    <x-icon name="arrow-top-right-on-square" class="h-4 w-4 text-gray-400 hover:text-primary-500" />
                </a>
            </div>
            @else
            <span class="text-gray-400">—</span>
            @endif
            @endinteract

            @interact('column_users_count', $row)
            @php
                $clinicians = GlobalUser::where('tenant_id', $row->id)->where('user_type', 'clinician')->count();
                $patients = GlobalUser::where('tenant_id', $row->id)->where('user_type', 'patient')->count();
            @endphp
            <div class="flex items-center gap-1">
                <x-badge :text="$clinicians . ' clinician'" :color="$clinicians > 0 ? 'blue' : 'zinc'" light xs />
                <x-badge :text="$patients . ' patient'" :color="$patients > 0 ? 'green' : 'zinc'" light xs />
            </div>
            @endinteract

            @interact('column_created_at', $row)
            <span>{{ \Illuminate\Support\Carbon::parse($row->created_at)->format('M d, Y') }}</span>
            @endinteract

            @interact('column_action', $row)
            <x-button text="View" color="blue" wire:click="login('{{ $row->id }}')" sm />
            @endinteract
        </x-table>
    </x-card>
</div>

@script
<script>
Livewire.on('open-url', (data) => {
    window.open(data.url, '_blank');
});
</script>
@endscript
