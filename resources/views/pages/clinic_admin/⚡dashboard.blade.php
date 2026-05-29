<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::clinic_admin')] class extends Component
{
    //
};
?>

<div>
    <div class="flex gap-3">
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
</div>
