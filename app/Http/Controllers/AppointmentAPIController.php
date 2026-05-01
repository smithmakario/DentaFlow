<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentQueue;
use Illuminate\Http\Request;

class AppointmentAPIController extends Controller
{
    public function patient(Request $request)
    {
        return Appointment::where('patient_id', auth()->user()->id)
            ->with('clinician')
            ->get()
            ->map(function ($app) {
                return [
                    'id' => $app->id,
                    'title' => $app->title ?? 'Appointment',
                    'start' => $app->scheduled_at,
                    'status' => $app->status,
                    'notes' => $app->notes,
                    'clinician_name' => $app->clinician
                        ? $app->clinician->first_name . ' ' . $app->clinician->last_name
                        : null,
                ];
            });
    }
    
    public function clinician(Request $request)
    {
        return AppointmentQueue::where('clinician_id', auth()->user()->id)
            ->with('appointment.patient', 'appointment.clinician')
            ->get()
            ->map(function ($queue) {
                $app = $queue->appointment;
                return [
                    'id' => $app->id,
                    'title' => $app->title ?? 'Appointment',
                    'start' => $app->scheduled_at,
                    'status' => $app->status,
                    'notes' => $app->notes,
                    'queue_status' => $queue->status,
                    'patient_name' => $app->patient
                        ? $app->patient->first_name . ' ' . $app->patient->last_name
                        : null,
                    'clinician_name' => $app->clinician
                        ? $app->clinician->first_name . ' ' . $app->clinician->last_name
                        : null,
                ];
            });
    }
}
