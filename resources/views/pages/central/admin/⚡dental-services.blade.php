<?php

use App\Models\DentalService;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use TallStackUi\Traits\Interactions;

new
    #[Layout('layouts::admin')]
    class extends Component
    {
        use Interactions;
        use WithPagination;

        public $modal = false;

        public $editingServiceId;

        public $serviceName;

        public $serviceDescription;

        public $serviceCategory;

        public $serviceCost;

        public $search = '';

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'name', 'label' => 'Name'],
                    ['index' => 'category', 'label' => 'Category'],
                    ['index' => 'default_cost', 'label' => 'Default Cost'],
                    ['index' => 'action', 'label' => 'Actions'],
                ],
                'rows' => DentalService::when($this->search, fn($q) => $q->where(function ($q) {
                    $q->where('name', 'like', "%{$this->search}%")
                        ->orWhere('category', 'like', "%{$this->search}%");
                }))->latest()->paginate(15),
            ];
        }

        public function updatingSearch()
        {
            $this->resetPage();
        }

        public function openAddModal()
        {
            $this->resetServiceForm();
            $this->editingServiceId = null;
            $this->modal = true;
        }

        public function openEditModal($id)
        {
            $service = DentalService::findOrFail($id);
            $this->editingServiceId = $id;
            $this->serviceName = $service->name;
            $this->serviceDescription = $service->description;
            $this->serviceCategory = $service->category;
            $this->serviceCost = (string) $service->default_cost;
            $this->modal = true;
        }

        public function resetServiceForm()
        {
            $this->serviceName = '';
            $this->serviceDescription = '';
            $this->serviceCategory = '';
            $this->serviceCost = '';
        }

        public function save()
        {
            $this->validate([
                'serviceName' => 'required',
                'serviceCategory' => 'required',
                'serviceCost' => 'required|numeric|min:0',
            ]);

            DentalService::updateOrCreate(
                ['id' => $this->editingServiceId],
                [
                    'name' => $this->serviceName,
                    'description' => $this->serviceDescription,
                    'category' => $this->serviceCategory,
                    'default_cost' => $this->serviceCost,
                ]
            );

            $this->modal = false;
            $this->resetServiceForm();
            $this->toast()->success($this->editingServiceId ? 'Service updated' : 'Service created')->send();
        }

        public function deleteService($id)
        {
            DentalService::findOrFail($id)->delete();
            $this->toast()->success('Service deleted')->send();
        }

        public function getCategoryOptionsProperty()
        {
            return [
                ['label' => 'Cleaning', 'value' => 'Cleaning'],
                ['label' => 'Filling', 'value' => 'Filling'],
                ['label' => 'Extraction', 'value' => 'Extraction'],
                ['label' => 'Crown', 'value' => 'Crown'],
                ['label' => 'Bridge', 'value' => 'Bridge'],
                ['label' => 'Root Canal', 'value' => 'Root Canal'],
                ['label' => 'Whitening', 'value' => 'Whitening'],
                ['label' => 'Checkup', 'value' => 'Checkup'],
                ['label' => 'Surgery', 'value' => 'Surgery'],
                ['label' => 'Other', 'value' => 'Other'],
            ];
        }
    };
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Dental Services Catalog</p>
        <p class="text-sm text-gray-500">Manage the shared catalog of dental procedures available across all branches</p>
    </div>

    <x-card>
        <x-slot:header>
            <div class="flex items-center gap-2">
                <x-icon name="clipboard-document-list" outline class="h-6 w-6" /> Services
            </div>
            <div class="flex items-center gap-2">
                <x-input wire:model.live="search" placeholder="Search by name or category" />
                <x-button text="Add Service" icon="plus" wire:click="openAddModal" />
            </div>
        </x-slot:header>

        <x-table :$headers :$rows paginate loading>
            @interact('column_default_cost', $row)
            <span class="font-mono">₦{{ number_format($row->default_cost, 2) }}</span>
            @endinteract

            @interact('column_action', $row)
            <div class="flex items-center gap-1">
                <x-button icon="pencil" xs wire:click="openEditModal({{ $row->id }})" />
                <x-button icon="trash" xs color="red" wire:click="deleteService({{ $row->id }})" wire:confirm="Delete this service?" />
            </div>
            @endinteract
        </x-table>
    </x-card>

    <x-modal title="{{ $editingServiceId ? 'Edit Service' : 'Add Service' }}" wire="modal">
        <form wire:submit="save" class="space-y-4">
            <x-input label="Name *" placeholder="e.g. Teeth Cleaning" wire:model="serviceName" />
            <x-textarea label="Description" placeholder="Optional description" wire:model="serviceDescription" />
            <div class="flex gap-2">
                <div class="flex-1">
                    <x-select.styled label="Category *" :options="$this->categoryOptions" wire:model="serviceCategory" />
                </div>
                <div class="flex-1">
                    <x-input label="Default Cost *" placeholder="0.00" wire:model="serviceCost" prefix="₦" />
                </div>
            </div>
            <x-button type="submit" :text="$editingServiceId ? 'Update' : 'Add'" loading />
        </form>
    </x-modal>
</div>
