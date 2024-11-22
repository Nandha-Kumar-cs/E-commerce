<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //first it will check the email is present is there or if it not there it will return back with errors
        $user = \App\Models\User::where('email', $request->email)->first();
        if (!$user)
        {
            return back()->withErrors([
                'email' => 'We could not find a user with that email address.',
            ]);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('home')->withSuccess('Login Success');
        } else
        {
            return back()->withErrors([
                'password' => 'Invalid password ',

            ])->onlyInput('password');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
