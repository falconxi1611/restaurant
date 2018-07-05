<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MENU', function (Blueprint $table) {
            $table->increments('MENU_ID');
            $table->string('MENU_NAME', 100);
            $table->unsignedInteger('MENUTYPE_ID');
            $table->foreign('MENUTYPE_ID')->references('MENUTYPE_ID')->on('MENU_TYPE');
            $table->unsignedInteger('CUSTOMER_ID');
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('CUSTOMER_INFO');
            $table->longText('DESCRIPTION');
            $table->string('IMAGE', 50);
            $table->unsignedInteger('COST');
            $table->unsignedInteger('SALE');
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
        Schema::dropIfExists('MENU');
    }
}
