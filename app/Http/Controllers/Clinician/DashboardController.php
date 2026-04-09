<?php

namespace App\Http\Controllers\Clinician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('clinician.dashboard.index');
    }
}
