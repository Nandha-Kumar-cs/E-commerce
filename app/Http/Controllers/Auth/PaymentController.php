<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\userCartList;

class PaymentController extends Controller
{
    public function pay($userId)
    {
        $cart = userCartList::where('userCart_id', $userId)->first();
        if ($cart)
        {
            $cart->status = 'paid';
            $cart->save();
            return back();
        }
        return back()->with('key' , 'Cart no found');

    }
}
