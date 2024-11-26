<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\userCartList;
use Illuminate\Database\Eloquent\Collection;
class PaymentController extends Controller
{
    public function pay($userId , $productName)
    {

        $cart = userCartList::where('userCart_id', $userId)->first();
        // dd($cart);
        if ($cart)
        {
            $cart->update(['status' => 'paid']);
            $userPrice = $cart->totalCost;
            $userName = $cart->userName;
            $qty = $cart->qty;
            $status = $cart->status;
            $pName = $productName;
            return view('payment', ['cost' => $userPrice , 'userName'=>$userName , 'qty'=>$qty , 'status'=>$status , 'pname'=>$pName]);
        }
        return back()->with('key', 'Cart no found');

    }
}
