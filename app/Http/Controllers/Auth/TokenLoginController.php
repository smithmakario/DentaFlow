<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenLoginController extends Controller
{
    public function __invoke(Request $request, $token)
    {
        list($data, $signature) = explode('.', $token);
        $expected = hash_hmac('sha256', $data, config('app.key'));

        if (!hash_equals($expected, $signature)) {
            return back()->withErrors(['username' => 'The token is invalid']);
        }

        $payload = json_decode(base64_decode($data), true);
        
        if ($payload['exp'] < time()) {
            return back()->withErrors(['username' => 'Token has expired']);
        }

        $user = User::find($payload['user_id']);
        Auth::login($user);
        return redirect("/{$user->user_type}");
    }
}
