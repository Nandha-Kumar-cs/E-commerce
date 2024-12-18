<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CartUserList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('userCart' ,function (Blueprint $table) {
            $table->bigIncrements('userCart_id');
            $table->string('userName');
            $table->string('qty');
            $table->string('totalCost');
            $table->string('productCode');
            $table->string('productId');
            $table->string('status');
            $table->timestamps();
        });
    }
}
