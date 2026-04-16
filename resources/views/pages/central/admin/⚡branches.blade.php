<?php


use Livewire\Attributes\Computed;
use TallStackUi\Traits\Interactions;




use App\Models\Tenant;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('layouts::admin')] class extends Component
{
    use Interactions;

    #[Validate('required|unique:tenants,id')]
    public $branch;

    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => 'Branch'],
            ],
            'rows' => Tenant::all(),
        ];
    }


    public function save()
    {
        $this->validate();
        $tenant = Tenant::create(['id' => $this->branch]);
        if (app()->environment('local')) {
            $tenant->domains()->create(['domain' => "{$this->branch}.localhost"]);
        } else {
            $tenant->domains()->create(['domain' => "{$this->branch}.". request()->getHost()]);
        }
        $this->toast()->success('Branch created')->send();
    }
};
?>

<div>
    <x-modal title="Add Branch" id="modal-branch" x-on:close-modal.window="$tsui.close.modal('modal-branch')">
        <form action="" wire:submit="save">
            <div class="mb-6">
                <x-input label="Branch name *" placeholder="Enter branch name" wire:model="branch">
                    <x-slot:suffix button>
                        <x-button text=".{{ request()->getHost() }}" sm />
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
        <x-table :$headers :$rows />
    </x-card>
</div>
@script
<script>
Livewire.on('success', () => {
    window.dispatchEvent(new CustomEvent('close-modal'));
})
</script>
@endscript
