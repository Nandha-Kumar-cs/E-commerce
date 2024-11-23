<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ElectroniceList;
use App\Models\MobileList;
use App\Models\AccessoriesList;
use App\Models\MobileCases;
class Home extends Controller
{
  public function LoadProducts(){
        $products = ElectroniceList::all();
        $mobilelist = MobileList::all();
        $accessories =AccessoriesList::all();
        $mobiles = MobileCases::all();
        return view('home' , compact('products' , 'mobilelist' , 'accessories' , 'mobiles'));
  }
}
