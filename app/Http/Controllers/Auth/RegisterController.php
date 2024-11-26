<?php

namespace App\Http\Controllers\Auth;

use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
                'contact'=>'required|min:10|max:10'
            ],[
                'contact'=>'your number must be 10 digits'
            ]

        );

        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );
        $credentials = $request->only(['email' , 'password']);
        Auth::attempt( $credentials);
        $request->session()->regenerate();


        return redirect('/home');
    }


}
