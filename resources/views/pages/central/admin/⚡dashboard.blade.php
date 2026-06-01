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
            'onboardingHeaders' => [
                ['index' => 'clinic_name', 'label' => 'Clinic Name'],
                ['index' => 'sub_type', 'label' => 'Plan'],
                ['index' => 'branch_no', 'label' => 'Branches'],
                ['index' => 'contact_email', 'label' => 'Email'],
                ['index' => 'telephone', 'label' => 'Phone'],
                ['index' => 'status', 'label' => 'Status'],
                ['index' => 'created_at', 'label' => 'Onboarded'],
            ],
            'onboardingRows' => Tenant::with('clinic_profile')
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
            <div id="bar-chart" class="w-full"></div>
        </x-card>

        <x-card>
            <x-slot:header>
                <div class="flex items-center gap-2">
                    <x-icon name="banknotes" outline class="h-8 w-8" /> Subscriptions
                </div>
            </x-slot:header>
            <div id="donut-chart"></div>
        </x-card>
    </div>

    <x-card>
        <x-slot:header>
                <div class="flex items-center gap-2">
                    <x-icon name="building-office" outline class="h-8 w-8" /> Recent Clinic Onboardings
                </div>
                <x-button text="View All" icon="arrow-right" color="white" outline x-on:click="window.location.href='{{ route('admin.clinics.index') }}'" />
        </x-slot:header>
        <x-table :headers="$onboardingHeaders" :rows="$onboardingRows">
            @interact('column_clinic_name', $row)
            {{ $row->clinic_profile?->clinic_name ?? 'N/A' }}
            @endinteract

            @interact('column_sub_type', $row)
            <x-badge text="{{ ucfirst($row->clinic_profile?->sub_type ?? 'Standard') }}" color="blue" />
            @endinteract

            @interact('column_branch_no', $row)
            {{ $row->clinic_profile?->branch_no ?? 1 }}
            @endinteract

            @interact('column_contact_email', $row)
            {{ $row->clinic_profile?->contact_email ?? 'N/A' }}
            @endinteract

            @interact('column_telephone', $row)
            {{ $row->clinic_profile?->telephone ?? 'N/A' }}
            @endinteract

            @interact('column_status', $row)
            @php $status = $row->clinic_profile?->status ?? 'inactive'; @endphp
            <x-badge text="{{ ucfirst($status) }}" color="{{ $status === 'active' ? 'green' : 'secondary' }}" />
            @endinteract

            @interact('column_created_at', $row)
            {{ $row->created_at->format('M d, Y') }}
            @endinteract
        </x-table>
    </x-card>
</div>
@script
<script>
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        const data = google.visualization.arrayToDataTable([
            ['Growth', 'Clinics'],
            ['JAN', 45],
            ['FEB', 30],
            ['MAR', 50],
            ['APR', 25],
            ["MAY", 14],
            ["JUN", 55],
        ]);
        const donutData = google.visualization.arrayToDataTable([
            ['Plan', 'No of users'],
            ['Standard', 753],
            ['Professional', 201],
            ['Enterprise', 159],
        ]);
        
        const options = {
            width: "100%",
            legend: { position: "none" },
            bar: { groupWidth: "90%"},
            chartArea: {
                width: '100%',
            }
        };
        const donutOptions = {
            pieHole: 0.4,
        };

        const barChart = new google.charts.Bar(document.getElementById('bar-chart'));
        barChart.draw(data, google.charts.Bar.convertOptions(options));

        const donutChart = new google.visualization.PieChart(document.getElementById('donut-chart'));
        donutChart.draw(donutData, donutOptions);
    }
</script>
@endscript
