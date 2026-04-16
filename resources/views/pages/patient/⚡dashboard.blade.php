<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
    #[Layout('layouts::patient')]
    class extends Component
    {
        //
    };
?>

<div>
    <p></p>
    <div class="flex gap-3">
        <x-stats title="Treatments" :number="50" /> 
        <x-stats title="Appointments" :number="50" /> 
        <x-stats title="Medical Records" :number="50" /> 
    </div>
</div>
