<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ElectroniceList;
use App\Models\MobileList;
use App\Models\AccessoriesList;
use App\Models\MobileCases;
use Illuminate\Support\Facades\Auth;

class viewProducts extends Controller
{
    public function showProducts($id, $category)
    {
        $products = ElectroniceList::all();
        $mobilelist = MobileList::all();
        $accessories = AccessoriesList::all();
        $mobiles = MobileCases::all();
        $product = '';
        switch ($category)
        {
            case 2:
            {
                $product = ElectroniceList::where('E_id', $id)->firstOrFail();
                break;
            }
            case 1:
            {
                $product = MobileList::where('productid', $id)->firstOrFail();
                break;
            }
            case 4:
            {
                $product = AccessoriesList::where('acc_id', $id)->firstOrFail();
                break;
            }
            case 3:
            {
                $product = MobileCases::where('Case_id', $id)->firstOrFail();
                break;
            }
            default:
            {
                return redirect('/home')->withErrors('invalid operation');
            }
        }
        if (Auth::check())
        {
            return view('productView',compact('product' ,'category'));
        } else
        {
            return redirect('/login')->with('key', 'please login for continue your shopping');
        }

    }



}
