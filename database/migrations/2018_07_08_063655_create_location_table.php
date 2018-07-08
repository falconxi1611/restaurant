<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LOCATION', function (Blueprint $table) {
            $table->increments('LOCATION_ID');
            $table->string('LOCATION_NAME', 100);
            $table->unsignedInteger('PARTY_TYPE');
            $table->foreign('PARTY_TYPE')->references('PARTY_ID')->on('PARTY_TYPE');
            $table->unsignedInteger('LOCATION_CAPACITY');
            $table->char('LOCATION_STATUS', 2);
            $table->char('DEL_FLG', 1)->default('0');
            $table->timestamp('CREATED_DATE')->useCurrent();
            $table->timestamp('UPDATED_DATE')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LOCATION');
    }
}
