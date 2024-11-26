<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\userCartList;
use Illuminate\Support\Facades\Log;
use App\Models\ElectroniceList;
use App\Models\MobileList;
use App\Models\AccessoriesList;
use App\Models\MobileCases;
class cartChecking extends Controller
{
    public function check()
    {
        if (!auth()->check())
        {
            return redirect('/login')->with('key', 'Please login to continue your shopping');
        }

        $user = auth()->user()->name;
        $isUserCArt = userCartList::where('userName', $user)->first();

        if ($isUserCArt)
        {
            $exits = userCartList::where('userName', $user)->get();


            $storeDetails = [];


            foreach ($exits as $details)
            {
                $productId = $details->productId;
                $productCode = $details->productCode;
                $userId = $details->userCart_id;

                switch ($productCode)
                {
                    case 2:
                    {
                        $product = ElectroniceList::where('E_id', $productId)->firstOrFail();
                        array_push($storeDetails, [
                            'productName' => $product->card_title,
                            'totalPrice' => $details->totalCost,
                            'quantity' => $details->qty,
                            'status' => $details->status,
                            'productImage' => $product->img_link,
                            'userCartId' =>$userId
                        ]);
                        break;
                    }
                    case 1:
                    {
                        $product = MobileList::where('productId', $productId)->firstOrFail();
                        array_push($storeDetails, [
                            'productName' => $product->brand_name . $product->version,
                            'totalPrice' => $details->totalCost,
                            'quantity' => $details->qty,
                            'status' => $details->status,
                            'productImage' => $product->img_link,
                            'userCartId' => $userId
                        ]);
                        break;
                    }
                    case 4:
                    {
                        $product = AccessoriesList::where('acc_id', $productId)->firstOrFail();
                        array_push($storeDetails, [
                            'productName' => $product->brand_name . $product->version,
                            'totalPrice' => $details->totalCost,
                            'quantity' => $details->qty,
                            'status' => $details->status,
                            'productImage' => $product->img_link,
                            'userCartId' =>$userId
                        ]);
                        break;
                    }
                    case 3:
                    {
                        $product = MobileCases::where('Case_productId', $productId)->firstOrFail();
                        array_push($storeDetails, [
                            'productName' => $product->CaseName,
                            'totalPrice' => $details->totalCost,
                            'quantity' => $details->qty,
                            'status' => $details->status,
                            'productImage' => $product->img_link,
                            'userCartId' =>$userId
                        ]);
                        break;
                    }
                    default:
                    {
                        return redirect('/home')->withErrors('invalid operation');
                    }
                }



            }

            return view('viewCart', ['productDetails' => $storeDetails]);



        } else
        {
            return view('cartEmpty');
        }
    }
}
