<?php

use App\Models\GlobalUser;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new
    #[Layout('layouts::admin')]
    class extends Component
    {
        use WithPagination;

        public $search = '';

        public $filterType = '';

        public function with(): array
        {
            $roles = ['doctor', 'receptionist', 'nurse', 'patient', 'accountant', 'lab_tech', 'clinic_admin'];

            return [
                'headers' => [
                    ['index' => 'first_name', 'label' => 'First name'],
                    ['index' => 'last_name', 'label' => 'Last name'],
                    ['index' => 'email', 'label' => 'Email'],
                    ['index' => 'role', 'label' => 'Role'],
                    ['index' => 'tenant_id', 'label' => 'Branch'],
                ],
                'rows' => GlobalUser::with('tenant')
                    ->when($this->search, fn($q) => $q->where(function ($q) {
                        $q->where('first_name', 'like', "%{$this->search}%")
                            ->orWhere('last_name', 'like', "%{$this->search}%")
                            ->orWhere('email', 'like', "%{$this->search}%")
                            ->orWhere('username', 'like', "%{$this->search}%");
                    }))
                    ->when($this->filterType, fn($q) => $q->where('role', $this->filterType))
                    ->latest()
                    ->paginate(15),
                'totalDoctors' => GlobalUser::where('role', 'doctor')->count(),
                'totalPatients' => GlobalUser::where('role', 'patient')->count(),
                'roleOptions' => collect($roles)->map(fn($r) => [
                    'label' => ucfirst(str_replace('_', ' ', $r)),
                    'value' => $r,
                ])->prepend(['label' => 'All', 'value' => ''])->toArray(),
            ];
        }

        public function updatingSearch()
        {
            $this->resetPage();
        }

        public function updatingFilterType()
        {
            $this->resetPage();
        }
    };
?>

<div class="space-y-6">
    <div>
        <p class="text-xl">Global Users Directory</p>
        <p class="text-sm text-gray-500">Browse all users across all branches</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <x-stats title="Total Users" :number="$rows->total()" icon="users" />
        <x-stats title="Doctors" :number="$totalDoctors" icon="user" color="blue" />
        <x-stats title="Patients" :number="$totalPatients" icon="user" color="green" />
    </div>

    <x-card>
        <x-slot:header>
            <div class="flex items-center gap-2">
                <x-icon name="magnifying-glass" outline class="h-6 w-6" /> Users
            </div>
            <div class="flex items-center gap-2">
                <x-input wire:model.live="search" placeholder="Search by name, email, or username" />
                <x-select.styled wire:model.live="filterType" :options="$roleOptions" />
            </div>
        </x-slot:header>

        <x-table :$headers :$rows paginate loading>
            @interact('column_role', $row)
            @php
                $color = match($row->role) {
                    'doctor' => 'blue',
                    'patient' => 'green',
                    'clinic_admin' => 'red',
                    'receptionist' => 'purple',
                    'nurse' => 'pink',
                    'accountant' => 'yellow',
                    'lab_tech' => 'orange',
                    default => 'zinc'
                };
            @endphp
            <x-badge :text="ucfirst(str_replace('_', ' ', $row->role))" :color="$color" light />
            @endinteract

            @interact('column_tenant_id', $row)
            <span>{{ $row->tenant->id ?? '—' }}</span>
            @endinteract
        </x-table>
    </x-card>
</div>
