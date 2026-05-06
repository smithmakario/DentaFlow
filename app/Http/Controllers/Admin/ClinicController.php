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
}
