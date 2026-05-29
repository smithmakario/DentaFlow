<?php

use App\Models\ClinicBranchProfile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

new #[Layout('layouts::clinic_admin')] class extends Component
{
    use Interactions;

    #[Validate('required|max:255')]
    public string $name = '';

    #[Validate('nullable|max:1000')]
    public string $description = '';

    #[Validate('nullable|max:255')]
    public string $address = '';

    #[Validate('nullable|email|max:255')]
    public string $contact_email = '';

    #[Validate('nullable|max:20')]
    public string $telephone = '';

    #[Validate('nullable|max:255')]
    public string $specialization = '';

    public array $specializations = [
        'General Dentistry',
        'Orthodontics',
        'Pediatric Dentistry',
        'Periodontics',
        'Cosmetic Dentistry',
        'Endodontics',
        'Oral Surgery',
        'Multi-Specialty',
    ];

    public function save()
    {
        $this->validate();

        ClinicBranchProfile::create([
            'name' => $this->name,
            'description' => $this->description,
            'address' => $this->address,
            'contact_email' => $this->contact_email,
            'telephone' => $this->telephone,
            'specialization' => $this->specialization,
            'status' => 'active',
        ]);

        $this->toast()->success('Branch created successfully')->send();
        $this->redirect(route('clinic_admin.branches.index'), navigate: true);
    }
};
?>

<div>
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('clinic_admin.branches.index') }}" class="flex items-center gap-1 text-gray-500 hover:text-gray-700">
            <x-icon name="arrow-left" class="h-5 w-5" />
            Back
        </a>
        <div>
            <p class="text-xl">Add Branch</p>
            <p class="text-sm text-gray-500">Create a new branch for your clinic</p>
        </div>
    </div>

    <div class="max-w-2xl mx-auto">
        <x-card>
            <form wire:submit="save" class="space-y-6">
                <x-input label="Branch Name *" placeholder="Enter branch name" wire:model="name" />

                <x-textarea label="Description" placeholder="Brief description of the branch" wire:model="description" />

                <x-input label="Address" placeholder="Enter branch address" wire:model="address" />

                <div class="flex gap-3">
                    <div class="basis-1/2">
                        <x-input label="Contact Email" placeholder="branch@clinic.com" wire:model="contact_email" />
                    </div>
                    <div class="basis-1/2">
                        <x-input label="Telephone" placeholder="080xxxxxxxx" wire:model="telephone" />
                    </div>
                </div>

                <x-select.styled label="Specialization" placeholder="Select specialization" :options="$specializations" wire:model="specialization" />

                <div class="flex gap-3 justify-end pt-4 border-t">
                    <a href="{{ route('clinic_admin.branches.index') }}">
                        <x-button text="Cancel" color="white" outline />
                    </a>
                    <x-button type="submit" text="Create Branch" icon="plus" loading />
                </div>
            </form>
        </x-card>
    </div>
</div>
