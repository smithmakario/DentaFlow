<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentAPIController extends Controller
{
    public function __invoke(Request $request)
    {
        return Appointment::all()->map(function ($app) {
            return [
                'id' => $app->id,
                'title' => $app->title ?? 'Appointment',
                'start' => $app->scheduled_at,
            ];
        });
    }
}
