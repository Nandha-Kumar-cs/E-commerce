<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\userCartList;
class cartChecking extends Controller
{
    public function check()
    {
        if (auth()->check())
        {
            $user = auth()->user()->name;
            $exits = userCartList::where('userName', $user)->first();

            if (!$exits)
            {
                return view('cartEmpty');
            } else
            {
                return view('viewCart');
            }
        } else
        {
            return redirect('/login')->with('key','please login to continue your shopping');
        }

    }
    public function addCart($productId)
    {

    }
}
