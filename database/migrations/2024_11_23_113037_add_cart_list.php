<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCartList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
