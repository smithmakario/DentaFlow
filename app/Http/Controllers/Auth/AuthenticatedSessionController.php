<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }


    public function authUser(Request $request)
    {
        $credentials = $request->only(['username', 'password']); 
        if (Auth::attempt($credentials)) {
            return redirect('admin');
        }
        return back()->withErrors(['username' => 'Credentials not found']);
    }
}
