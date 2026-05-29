<?php

use App\Models\ClinicBranchProfile;
use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::clinic_admin')] class extends Component
{
    public function with(): array
    {
        $branches = ClinicBranchProfile::latest()->get();

        return [
            'headers' => [
                ['index' => 'name', 'label' => 'Branch Name'],
                ['index' => 'address', 'label' => 'Address'],
                ['index' => 'contact_email', 'label' => 'Email'],
                ['index' => 'telephone', 'label' => 'Phone'],
                ['index' => 'specialization', 'label' => 'Specialization'],
                ['index' => 'status', 'label' => 'Status'],
                ['index' => 'created_at', 'label' => 'Created'],
            ],
            'rows' => $branches,
            'totalBranches' => ClinicBranchProfile::count(),
            'activeBranches' => ClinicBranchProfile::where('status', 'active')->count(),
            'inactiveBranches' => ClinicBranchProfile::where('status', '!=', 'active')->count(),
        ];
    }
};
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Branches</p>
        <p class="text-sm text-gray-500">Manage all clinic branches</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <x-stats title="Total Branches" :number="$totalBranches" icon="building-office" />
        <x-stats title="Active Branches" :number="$activeBranches" icon="check-circle" color="green" />
        <x-stats title="Inactive Branches" :number="$inactiveBranches" icon="x-circle" color="red" />
    </div>

    <x-card>
        <x-slot:header>
            <span>All Branches</span>
            <a href="{{ route('clinic_admin.branches.add') }}" wire:navigate>
                <x-button text="Add Branch" icon="plus" />
            </a>
        </x-slot:header>
        <x-table :$headers :$rows>
            @interact('column_name', $row)
            <div class="font-medium">{{ $row->name }}</div>
            @endinteract

            @interact('column_address', $row)
            {{ $row->address ?? 'N/A' }}
            @endinteract

            @interact('column_contact_email', $row)
            {{ $row->contact_email ?? 'N/A' }}
            @endinteract

            @interact('column_telephone', $row)
            {{ $row->telephone ?? 'N/A' }}
            @endinteract

            @interact('column_specialization', $row)
            <x-badge :text="$row->specialization ?? 'General'" color="blue" light />
            @endinteract

            @interact('column_status', $row)
            <x-badge text="{{ ucfirst($row->status) }}" color="{{ $row->status === 'active' ? 'green' : 'secondary' }}" />
            @endinteract

            @interact('column_created_at', $row)
            {{ $row->created_at->format('M d, Y') }}
            @endinteract
        </x-table>
    </x-card>
</div>
