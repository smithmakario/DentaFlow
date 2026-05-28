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
    public function totalDoctors()
    {
        return GlobalUser::where('role', 'doctor')->count();
    }

    #[Computed]
    public function totalPatients()
    {
        return GlobalUser::where('role', 'patient')->count();
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
                ->where('role', 'patient')
                ->latest()
                ->limit(10)
                ->get(),
        ];
    }
};
?>

<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <p class="text-xl">Platform Overview</p>
            <p class="text-gray-400">Real-time health and growth metrics for DentaFlow Global</p>
        </div>
        <div>
            <x-button text="Last 30 Days" icon="calendar" color="white" class="me-2" outline />
            <x-button text="Export Report" icon="arrow-down-tray" />
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-stats :title="'Total Clinics'" number="1,284" icon="building-office" />
        <x-stats :title="'Total Revenue'" number="₦5.4B" icon="banknotes" color="green" :increase="true" />
        <x-stats :title="'Active Subscriptions'" number="1,150" icon="shield-check" color="blue" />
        <x-stats :title="'Growth Rate'" number="18.5%" icon="chart-bar-square" color="red" increase="true" />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <x-card>
            <x-slot:header>
                <div class="flex items-center gap-2">
                    <x-icon name="chart-bar" outline class="h-8 w-8" /> Clinic Onboarding Growth
                </div>
            </x-slot:header>
            <div id="chart"></div>
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
@script
<script>
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        const data = google.visualization.arrayToDataTable([
            ['Element', 'Clinics'],
            ['JAN', 45],
            ['FEB', 30],
            ['MAR', 50],
            ['APR', 25],
            ["MAY", 14],
            ["JUN", 55],
        ]);
        const view = new google.visualization.DataView(data);
        view.setColumns([0, 1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation"}, 2]);
        
        const options = {
            width: 600,
            height: 400,
            bar: { groupWidth: "95%"},
            legend: { position: "none" },
        };
        const chart = new google.visualization.ColumnChart(document.getElementById('chart'));
        chart.draw(view, options);

    }
</script>
@endscript
