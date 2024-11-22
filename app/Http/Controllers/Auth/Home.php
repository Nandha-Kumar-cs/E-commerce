<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ElectroniceList;

class Home extends Controller
{
  public function LoadProducts(){
        $products = ElectroniceList::all();
        return view('home' , compact('products'));
  }
}
