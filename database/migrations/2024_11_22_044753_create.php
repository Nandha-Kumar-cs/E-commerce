<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_list' , function (Blueprint $table) {
            $table->increments('productid');
            $table->integer('quantity');
            $table->double('price');
            $table->string('status');
            $table->string('img_link');
            $table->string('emi_option');
            $table->string('delivery_option');
            $table->string('rating');
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
