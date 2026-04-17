<?php

namespace App\Observers;

use App\Models\Appointment;
use App\Models\AppointmentQueue;
use Illuminate\Support\Facades\DB;

class AppointmentObserver
{
    /**
     * Handle the Appointment "created" event.
     */
    public function created(Appointment $appointment): void
    {
        DB::transaction(function () use ($appointment) {
            $max = AppointmentQueue::where('clinician_id', $appointment->clinician->id)->lockForUpdate()->max('position');
            AppointmentQueue::create([
                'appointment_id' => $appointment->id,
                'clinician_id' => $appointment->clinician->id,
                'patient_id' => $appointment->patient->id,
                'position' => ($max ?? 0) + 1,
            ]);
        });
    }

    /**
     * Handle the Appointment "updated" event.
     */
    public function updated(Appointment $appointment): void
    {
        //
    }

    /**
     * Handle the Appointment "deleted" event.
     */
    public function deleted(Appointment $appointment): void
    {
        //
    }

    /**
     * Handle the Appointment "restored" event.
     */
    public function restored(Appointment $appointment): void
    {
        //
    }

    /**
     * Handle the Appointment "force deleted" event.
     */
    public function forceDeleted(Appointment $appointment): void
    {
        //
    }
}
