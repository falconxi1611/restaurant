<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FOOD', function (Blueprint $table) {
            $table->increments('FOOD_ID');
            $table->string('FOOD_NAME', 100);
            $table->unsignedInteger('FOOD_TYPE_ID');
            $table->foreign('FOOD_TYPE_ID')->references('FOOD_TYPE_ID')->on('FOOD_TYPE');
            $table->double('COST');
            $table->string('UNIT', 25);
            $table->char('SIZE', 1);//TODO: Define 0: size nhỏ, 1: size vừa, 2: size lớn
            $table->longText('DESCRIPTION');
            $table->string('IMAGE', 50);
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
        Schema::dropIfExists('FOOD');
    }
}
