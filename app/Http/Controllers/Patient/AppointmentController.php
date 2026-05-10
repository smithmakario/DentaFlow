<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('patient.appointments.create.services');
    }
    
    public function provider()
    {
        return view('patient.appointments.create.provider');
    }
    public function time()
    {
        return view('patient.appointments.create.time');
    }
    public function review()
    {
        return view('patient.appointments.create.review');
    }
}
