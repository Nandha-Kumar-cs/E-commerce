<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccessoriesList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories_list', function (Blueprint $table) {
            $table->bigIncrements('acc_id');
            $table->string('pname');
            $table->string('delivery_option');
            $table->string('limited_deal');
            $table->string('emi_option');
            $table->string('brand_name');
            $table->string('img_link');
            $table->string('version');
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
        Schema::dropIfExists('table_accessories_list');
    }
}
