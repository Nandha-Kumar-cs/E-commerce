<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileCases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_mobile_cases', function (Blueprint $table) {
            $table->bigIncrements('Case_id');
            $table->string('CaseName');
            $table->string('price');
            $table->string('Ratings');
            $table->string('Limited_deal');
            $table->string('delivery_option');
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
        Schema::dropIfExists('_mobile_cases');
    }
}
