<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProductCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('_mobile_cases', function (Blueprint $table) {
            $table->string('productCode')->first();
        });
        Schema::table('_electron_list', function (Blueprint $table) {
            $table->string('productCode')->first();
        });
        Schema::table('mobile_list', function (Blueprint $table) {
            $table->string('productCode')->first();
        });
        Schema::table('accessories_list', function (Blueprint $table) {
            $table->string('productCode')->first();
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
