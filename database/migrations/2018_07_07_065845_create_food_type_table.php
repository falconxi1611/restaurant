<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FOOD_TYPE', function (Blueprint $table) {
            $table->increments('FOOD_TYPE_ID');
            $table->string('FOOD_TYPE_NAME', 100);
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
        Schema::dropIfExists('FOOD_TYPE');
    }
}
