<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ORDER', function (Blueprint $table) {
            $table->increments('ORDER_ID');
            $table->unsignedInteger('CUSTOMER_ID');
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('CUSTOMER_INFO');
            $table->unsignedInteger('MENU_ID');
            $table->foreign('MENU_ID')->references('MENU_ID')->on('MENU');
            $table->unsignedInteger('NUMBER_OF_TABLE');
            $table->unsignedInteger('NUMBER_OF_CUSTOMER');
            $table->date('ORDER_DATE');
            $table->date('TIME_DATE');
            $table->double('TOTAL_AMOUNT');
            $table->double('DISCOUNT');
            $table->double('DEPOSIT');
            $table->double('REST_MONEY');
            $table->unsignedInteger('PAYMENT_METHOD');
            $table->foreign('PAYMENT_METHOD')->references('METHOD_ID')->on('PAYMENT_METHOD');
            $table->char('STATUS', 1);//TODO: define 0: chưa thanh toán, 1 đã thanh toán, 2 cancel
            $table->string('REMARK');
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
        Schema::dropIfExists('ORDER');
    }
}
