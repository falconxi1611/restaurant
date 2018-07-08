<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CHEF', function (Blueprint $table) {
            $table->increments('CHEF_ID');
            $table->string('CHEF_NAME', 100);
            $table->longText('CHEF_INFOMATION');
            $table->string('IMAGE', 50);
            $table->string('CHEF_FB');//Facebook
            $table->string('CHEF_TW');//Twiter
            $table->string('CHEF_GP');//Google Plus
            $table->string('CHEF_IN');//LinkedIn
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
        Schema::dropIfExists('CHEF');
    }
}
