<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainCartList extends Migration
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
        Schema::create('MainCartList', function (Blueprint $table) {
            $table->integer('userCart_id');
            $table->string('userName');
            $table->integer('productid');
            $table->integer('quantity');
            $table->double('price');
            $table->string('status');
            $table->timestamps();
        });
    }
}
