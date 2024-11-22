<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectronicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electronic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('E_pid');
            $table->string('E_pname');
            $table->string('E_userid');
            $table->string('E_price');
            $table->string('E_status');

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
        Schema::dropIfExists('electronic');
    }
}
