<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userCartList extends Model
{
   protected $table = 'usercart' ;
   protected $fillable = ['userName' , 'qty' , 'userCartId' , 'totalCost' , 'productCode' , 'productId' , 'status'];
}
