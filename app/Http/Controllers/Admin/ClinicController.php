<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        return view('admin.clinic.index');
    }

    public function add()
    {
        return view('admin.clinic.add');
    }

    public function stepBranches() 
    {
        return view('admin.clinic.step-branches');
    }
    
    public function stepSubscriptions() 
    {
        return view('admin.clinic.step-subscriptions');
    }

    public function stepUser() 
    {
        return view('admin.clinic.step-user');
    }


    public function saveClinicProfile()
    {
        //
    }
}








