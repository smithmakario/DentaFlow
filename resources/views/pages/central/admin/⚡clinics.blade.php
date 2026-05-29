<?php

use App\Models\Tenant;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\App;

new #[Layout('layouts::admin')] class extends Component
{
    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => 'Domain'],
                ['index' => 'clinic_name', 'label' => 'Clinic Name'],
                ['index' => 'admin', 'label' => 'Primary Admin'],
                ['index' => 'sub_type', 'label' => 'Subscription'],
                ['index' => 'status', 'label' => 'Status'],
            ],
            'rows' => Tenant::all(),
        ];
    }
};
?>

<div>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-xl">Clinic Management</h1>
            <p class="text-gray-400">Oversee and manage all active dental networks and individual practices on the platform</p>
        </div>
        <a href="{{ route('admin.clinics.onboarding') }}">
            <x-button text="Onboard New Clinic" icon="plus" />
        </a>
    </div>
    <div class="flex gap-4 mb-8">
        <div class="basis-1/4">
            <x-stats icon="swatch" title="Total Clinics" number="1,284" />
        </div>
        <div class="basis-1/4">
            <x-stats icon="swatch" title="Total Branches" number="1,284" />
        </div>
        <div class="basis-1/4">
            <x-stats icon="swatch" title="Domain Tier" number="Premium" />
        </div>
        <div class="basis-1/4">
            <x-stats icon="swatch" title="Failed Payments" number="14" color="red" />
        </div>
    </div>
    <x-card>
        <x-table :$headers :$rows>
            @interact('column_id', $row)
            <x-link icon="link" href="http://{{ $row->domains()->first()->domain }}{{ App::isLocal() ? ':' . request()->getPort() : null }}" target="_blank" color="blue">{{ $row->domains()->first()->domain }}</x-link>
            @endinteract

            @interact('column_clinic_name', $row)
            {{ $row->clinic_profile->clinic_name }}
            @endinteract

            @interact('column_sub_type', $row)
            {{ ucfirst($row->clinic_profile->sub_type) }}
            @endinteract

            @interact('column_status', $row)
            @if($row->clinic_profile->status === 'active')
            <x-badge text="{{ ucfirst($row->clinic_profile->status) }}" color="green" />
            @else
            <x-badge text="{{ ucfirst($row->clinic_profile->status) }}" color="secondary" /> 
            @endif
            @endinteract
        </x-table>
    </x-card>
</div>
