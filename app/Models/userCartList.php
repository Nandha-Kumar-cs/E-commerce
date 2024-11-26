<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userCartList extends Model
{
   protected $table = 'usercart' ;
   protected $primaryKey = 'userCart_id';
   protected $fillable = ['userName' , 'qty' , 'userCart_id' , 'totalCost' , 'productCode' , 'productId' , 'status'];
}
