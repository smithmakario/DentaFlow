<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::clinic_admin')] class extends Component
{
    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'patient', 'label' => 'Patient'],
                ['index' => 'treatment', 'label' => 'Treatment'],
                ['index' => 'branch', 'label' => 'Status'],
                ['index' => 'amount', 'label' => 'Amount'],
            ],
            'rows' => [],
        ];
    }
};
?>

<div>
    <div class="flex gap-3 mb-8">
        <div class="basis-1/2">
            <x-stats title="Appointments Today" number="24" icon="calendar" increase /> 
        </div>
        <div class="basis-1/2">
            <x-stats title="New Patients This Week" number="08" icon="user-plus" increase /> 
        </div>
        <div class="basis-1/2">
            <x-stats title="Weekly Revenue" number="₦5.5M" icon="banknotes" /> 
        </div>
    </div>
    <div class="flex gap-4 mb-8">
        <div class="basis-1/3">
            <x-card>
                <x-slot:header>
                    Inventory Alerts
                    <x-icon icon="exclamation-triangle" class="h-6" outline color="red" />
                </x-slot:header>
                <div class="flex flex-col gap-4 mb-6">
                    <x-alert title="Latex Gloves (M)" text="Critical: 2 boxes left" icon="document" color="rose" light />
                    <x-alert title="Fluroide Gel" text="Low: 12 units left" icon="document" color="blue" light />
                    <x-alert title="Dental Gauze (M)" text="Low: 5 packs left" icon="document" color="blue" light />
                </div>
                <x-button text="View all inventory" outline color="blue" class="w-full" />
            </x-card>
        </div>
        <div class="grow">
            <x-card class="h-full">
                <x-slot:header>
                    Patient Growth & Retention
                </x-slot:header>
                <div id="bar-chart"></div>
            </x-card>
        </div>
    </div>
    <div class="flex mb-8 justify-between items-center">
        <div>
            <h2 class="text-h2">Branch Overview</h2>
            <div>Real-time performance across all locations</div>
        </div>
        <x-button text="Add Branch" icon="plus" />
    </div>
    <div class="flex gap-4 mb-8">
        <div class="basis-1/3">
            <x-card image="https://picsum.photos/750/300">
                <div class="font-semibold text-xl">Downtown Clinic</div>
                <p>Akinlabi Ayo Street, Lekki, Lagos</p>
                <x-slot:footer>
                    <div class="flex gap-4">
                        <div class="basis-1/2">
                            <div class="text-gray-400 uppercase text-xs font-bold">Today's Cap</div>
                            <div class="text-sm font-bold">18/20 Slots</div>
                        </div>
                        <div class="bais-1/2">
                            <div class="text-gray-400 uppercase text-xs font-bold">Staff Active</div>
                            <div class="text-sm font-bold">12 Members</div>
                        </div>
                    </div>
                </x-slot:footer>
            </x-card>
        </div>
        <div class="basis-1/3">
            <x-card image="https://picsum.photos/750/300">
                <div class="font-semibold text-xl">Northside Dental</div>
                <p>Akinlabi Ayo Street, Lekki, Lagos</p>
                <x-slot:footer>
                    <div class="flex gap-4">
                        <div class="basis-1/2">
                            <div class="text-gray-400 uppercase text-xs font-bold">Today's Cap</div>
                            <div class="text-sm font-bold">18/20 Slots</div>
                        </div>
                        <div class="bais-1/2">
                            <div class="text-gray-400 uppercase text-xs font-bold">Staff Active</div>
                            <div class="text-sm font-bold">12 Members</div>
                        </div>
                    </div>
                </x-slot:footer>
            </x-card>
        </div>
        <div class="basis-1/3">
            <x-card image="https://picsum.photos/750/300">
                <div class="font-semibold text-xl">Westside Smiles</div>
                <p>Akinlabi Ayo Street, Lekki, Lagos</p>
                <x-slot:footer>
                    <div class="flex gap-4">
                        <div class="basis-1/2">
                            <div class="text-gray-400 uppercase text-xs font-bold">Today's Cap</div>
                            <div class="text-sm font-bold">18/20 Slots</div>
                        </div>
                        <div class="bais-1/2">
                            <div class="text-gray-400 uppercase text-xs font-bold">Staff Active</div>
                            <div class="text-sm font-bold">12 Members</div>
                        </div>
                    </div>
                </x-slot:footer>
            </x-card>
        </div>
    </div>
    <section>
        <x-card>
            <x-slot:header>
                Recent Activity
            </x-slot:header>
            <x-table :$headers :$rows  filters />
        </x-card>
    </section>
</div>
@script
<script>
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        const data = google.visualization.arrayToDataTable([
            ['Growth', 'Peformance'],
            ['JAN', 45],
            ['FEB', 30],
            ['MAR', 50],
            ['APR', 25],
            ["MAY", 14],
            ["JUN", 55],
        ]);
        
        const options = {
            width: "100%",
            legend: { position: "none" },
            bar: { groupWidth: "90%"},
            chartArea: {
                width: '100%',
            }
        };

        const barChart = new google.charts.Bar(document.getElementById('bar-chart'));
        barChart.draw(data, google.charts.Bar.convertOptions(options));

    }
</script>
@endscript
