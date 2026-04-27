<?php

use App\Models\GlobalUser;
use App\Models\Tenant;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Component;

new #[Layout('layouts::admin')] class extends Component {
    #[Computed]
    public function totalBranches()
    {
        return Tenant::count();
    }

    #[Computed]
    public function totalClinicians()
    {
        return GlobalUser::where('user_type', 'clinician')->count();
    }

    #[Computed]
    public function totalPatients()
    {
        return GlobalUser::where('user_type', 'patient')->count();
    }

    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'first_name', 'label' => 'First name'],
                ['index' => 'last_name', 'label' => 'Last name'],
                ['index' => 'email', 'label' => 'Email address'],
                ['index' => 'tenant_id', 'label' => 'Branch name'],
            ],
            'rows' => GlobalUser::with('tenant')
                ->where('user_type', 'patient')
                ->latest()
                ->limit(10)
                ->get(),
        ];
    }
};
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Welcome, {{ auth()->user()->username }}</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-stats :title="'Total Branches'" :number="$this->totalBranches" icon="rectangle-stack" />
        <x-stats :title="'Total Clinicians'" :number="$this->totalClinicians" icon="user" color="blue" />
        <x-stats :title="'Total Patients'" :number="$this->totalPatients" icon="users" color="green" />
        <x-stats :title="'Total Users'" :number="$this->totalClinicians + $this->totalPatients" icon="user-group" color="yellow" />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <x-card>
            <x-slot:header>
                <div class="flex items-center gap-2">
                    <x-icon name="user-circle" outline class="h-8 w-8" /> Recent Patients
                </div>
                <a href="{{ route('admin.users') }}">
                    <x-button text="View All" icon="arrow-right" outline />
                </a>
            </x-slot:header>
            <x-table :$headers :$rows>
                @interact('column_tenant_id', $row)
                <span>{{ $row->tenant->id ?? '—' }}</span>
                @endinteract
            </x-table>
        </x-card>

        <x-card>
            <x-slot:header>
                <div class="flex items-center gap-2">
                    <x-icon name="folder-open" outline class="h-8 w-8" /> Quick Actions
                </div>
            </x-slot:header>
            <div class="flex flex-col gap-3">
                <a href="{{ route('admin.users') }}" class="w-full">
                    <x-button text="Browse All Users" icon="users" class="w-full" />
                </a>
                <a href="{{ route('admin.branches') }}" class="w-full">
                    <x-button text="Manage Branches" icon="rectangle-stack" outline class="w-full" />
                </a>
            </div>
        </x-card>
    </div>
</div>
