<?php

namespace App\Livewire\Forms;

use App\Models\Appointment;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AppointmentForm extends Form
{
    public ?Appointment $appointment;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $clinician_id;

    #[Validate('required')]
    public $schedule_date;

    #[Validate('required')]
    public $schedule_time;

    public $notes;

    public function setAppointment(Appointment $app)
    {
        $this->appointment = $app;

        $this->title = $app->title;

        $this->clinician_id = $app->clinician_id;

        [$schedule_date, $schedule_time] = explode(' ', $app->scheduled_at);
        
        $this->schedule_date = $schedule_date;

        $this->schedule_time = $schedule_time;

        $this->notes = $app->notes;
    }

    public function update()
    {
        $scheduled_at = Carbon::parse("{$this->schedule_date} {$this->schedule_time}")->timezone('UTC');
        $this->appointment->update([
            'title' => $this->title,
            'scheduled_at' => $scheduled_at,
            'notes' => $this->notes,
        ]);
        $this->reset();
        return $this->appointment;
    }

    public function save()
    {
        $scheduled_at = Carbon::parse("{$this->schedule_date} {$this->schedule_time}")->timezone('UTC');
        $appointment = Appointment::create([
            'title' => $this->title,
            'clinician_id' => $this->clinician_id,
            'patient_id' => auth()->user()->id,
            'scheduled_at' => $scheduled_at,
            'notes' => $this->notes,
        ]);
        $this->reset();
        return $appointment;
    }
}
