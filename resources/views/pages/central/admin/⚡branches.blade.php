<?php


use App\Models\User;
use App\Services\TokenGeneratorService;
use TallStackUi\Traits\Interactions;
use App\Models\Tenant;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('layouts::admin')] class extends Component
{
    use Interactions;

    #[Validate('required|unique:tenants,id')]
    public $tenant;

    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => 'Branch'],
                ['index' => 'action', 'label' => 'Action']
            ],
            'rows' => Tenant::all(),
        ];
    }

    public function login(TokenGeneratorService $tokenGenerator, $tenant)
    {
        $user = auth()->user();
        $token = $tokenGenerator->signed([
            'user_id' => $user->id,
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

<div>
    <x-modal title="Add Branch" id="modal-branch" x-on:close-modal.window="$tsui.close.modal('modal-branch')">
        <form action="" wire:submit="save">
            <div class="mb-6">
                <x-input label="Branch name *" placeholder="Enter branch name" wire:model="tenant">
                    <x-slot:suffix button>
                        @if(app()->environment('local'))
                        <x-button text=".localhost" sm />
                        @else
                        <x-button text=".{{ request()->getHost() }}" sm />
                        @endif
                    </x-slot:suffix>
                </x-input>
            </div>
            <div>
                <x-button type="submit" text="Create" icon="plus" class="w-full" />
            </div>
        </form>
    </x-modal>
    <x-card>
        <x-slot:header>
            <span>Branches</span>
            <div>
                <x-button text="Add Branch" icon="plus" x-on:click="$tsui.open.modal('modal-branch')" />
            </div>
        </x-slot:header>
        <x-table :$headers :$rows >
            @interact('column_action', $row)
            <x-button text="View" color="blue" wire:click="login('{{ $row->id }}')" sm/>
            @endinteract
        </x-table>
    </x-card>
</div>
@script
<script>
Livewire.on('success', () => {
    window.dispatchEvent(new CustomEvent('close-modal'));
})
Livewire.on('open-url', (data) => {
    window.open(data.url, '_blank');
});
</script>
@endscript
