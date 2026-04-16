<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\TokenGeneratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenLoginController extends Controller
{
    public function __invoke(Request $request, TokenGeneratorService $tokenGenerator, $token)
    {
        $payload = $tokenGenerator->verifySigned($token);

        if ($payload) {
            $user = User::find($payload['user_id']);
            Auth::login($user);
            return redirect("/{$payload['user_type']}");
        }

        return back()->withErrors(['username' => 'Invalid credentials']);

    }
}
