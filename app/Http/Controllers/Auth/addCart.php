<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ElectroniceList;
use App\Models\MobileList;
use App\Models\AccessoriesList;
use App\Models\MobileCases;
use Illuminate\Support\Facades\Auth;
use App\Models\userCartList;
class addCart extends Controller
{
    public function adding($productId, $productCode, $cost, $qty)
    {
        if (Auth::check())
        {

            $prodCode = $productCode;
            $totalCost = $cost * $qty;
            $quantity = $qty;
            $pid = $productId;

            switch ($productCode)
            {
                case 1:
                {
                    $productDetails = MobileList::where('productid', $pid)->firstOrFail();
                    break;
                }
                case 2:
                {
                    $productDetails = ElectroniceList::where('E_id', $pid)->firstOrFail();
                    break;
                }
                case 3:
                {
                    $productDetails = MobileCases::where('Case_id', $pid)->firstOrFail();
                    break;
                }
                case 4:
                {
                    $productDetails = AccessoriesList::where('acc_id', $pid)->firstOrFail();
                    break;
                }
            }
            $inserted = userCartList::create([
                'userName' => auth()->user()->name,
                'qty' => $quantity,
                'totalCost' => $totalCost,
                'productId' => $pid,
                'productCode' => $prodCode,
                'status'=>'notyet'

            ]);
            if ($inserted)
            {
                return redirect('/cart');
            }


        } else
        {
            return redirect('/login')->with('key', 'please Login to continue');
        }

    }
}
