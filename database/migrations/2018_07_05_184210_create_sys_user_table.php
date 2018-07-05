<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SYS_USER', function (Blueprint $table) {
            $table->increments('USER_ID');
            $table->string('USER_NAME', 100)->unique();
            $table->string('PASSWORD');
            $table->unsignedInteger('USERTYPE_ID');
            $table->char('FULLNAME', 100);
            $table->char('EMAIL',50)->unique();
            $table->date('BIRTHDAY')->nullable();
            $table->string('ADDRESS')->nullable();
            $table->char('PHONE', 15)->nullable();
            $table->string('IMAGE',50)->nullable();
            $table->char('USER_STATUS', 2)->default('01');
            $table->unsignedInteger('LOCK_NUM')->default(0);
            $table->date('LOCK_DATE')->nullable();
            $table->char('DEL_FLG', 1)->default('0');
            $table->timestamp('CREATED_DATE')->useCurrent();
            $table->timestamp('UPDATED_DATE')->useCurrent();
            $table->rememberToken();
            $table->foreign('USERTYPE_ID')->references('USERTYPE_ID')->on('SYS_USER_TYPE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SYS_USER');
    }
}
