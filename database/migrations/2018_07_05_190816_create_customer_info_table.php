<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CUSTOMER_INFO', function (Blueprint $table) {
            $table->increments('CUSTOMER_ID');
            $table->string('CUSTOMER_NAME');
            $table->char('GENDER', 1); //0: Male, 1: Female
            $table->string('EMAIL', 50)->unique();
            $table->string('ADDRESS');
            $table->char('PHONE', 15)->unique();
            $table->unsignedInteger('POINT');
            $table->char('MEMBER_FLG', 1);
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
        Schema::dropIfExists('CUSTOMER_INFO');
    }
}
