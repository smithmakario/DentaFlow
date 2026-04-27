<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentQueue;
use Illuminate\Http\Request;

class AppointmentAPIController extends Controller
{
    public function patient(Request $request)
    {
        return Appointment::where('patient_id', auth()->user()->id)->get()->map(function ($app) {
            return [
                'id' => $app->id,
                'title' => $app->title ?? 'Appointment',
                'start' => $app->scheduled_at,
            ];
        });
    }
    
    public function clinician(Request $request)
    {
        return AppointmentQueue::where('clinician_id', auth()->user()->id)
            ->with('appointment.patient')
            ->get()
            ->map(function ($queue) {
                return [
                    'id' => $queue->appointment->id,
                    'title' => $queue->appointment->title ?? 'Appointment',
                    'start' => $queue->appointment->scheduled_at,
                    'patient_name' => $queue->appointment->patient
                        ? $queue->appointment->patient->first_name . ' ' . $queue->appointment->patient->last_name
                        : null,
                ];
            });
    }
}
