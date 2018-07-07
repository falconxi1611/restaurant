<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PAYMENT_METHOD', function (Blueprint $table) {
            $table->increments('METHOD_ID');
            $table->string('METHOD_NAME');
            $table->longText('DESCRIPTON');
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
        Schema::dropIfExists('PAYMENT_METHOD');
    }
}
