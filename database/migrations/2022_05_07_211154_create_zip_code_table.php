<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->id();
            $table->string('zip_code');
            $table->string('settlement');
            $table->string('settlement_type');
            $table->string('locality');
            $table->string('state');
            $table->string('city')->default('not_apply');
            $table->string('DZP');
            $table->string('state_number');
            $table->string('office');
            $table->string('number_settlement_type');
            $table->string('number_locality');
            $table->string('id_settlement');
            $table->string('zone');
            $table->string('city_key')->default('not_apply');;
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
        Schema::dropIfExists('zip_codes');
    }
}
