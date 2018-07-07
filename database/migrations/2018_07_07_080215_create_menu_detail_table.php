<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MENU_DETAIL', function (Blueprint $table) {
            $table->increments('MENUDETAIL_ID');
            $table->unsignedInteger('MENU_ID');
            $table->foreign('MENU_ID')->references('MENU_ID')->on('MENU');
            $table->unsignedInteger('FOOD_ID');
            $table->foreign('FOOD_ID')->references('FOOD_ID')->on('FOOD');
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
        Schema::dropIfExists('MENU_DETAIL');
    }
}
