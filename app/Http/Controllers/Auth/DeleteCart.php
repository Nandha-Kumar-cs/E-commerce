<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\userCartList;

class DeleteCart extends Controller
{
    public function delete($userCartId)
    {
        $user = auth()->user()->name;
        if ($user)
        {
           $userPID =  userCartList::where('userCart_id' ,$userCartId);
           if($userPID->delete()){
            return back()->with('key' , 'Cart Removed');
           }

        }
    }
}
