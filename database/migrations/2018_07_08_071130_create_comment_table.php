<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COMMENT', function (Blueprint $table) {
            $table->increments('COMMENT_ID');
            //TODO: Truoc mat làm danh gia mon an, bo sung sau danh gia dich vu va menu
            $table->unsignedInteger('FOOD_ID');
            $table->foreign('FOOD_ID')->references('FOOD_ID')->on('FOOD');
            $table->unsignedInteger('USER_ID');
            $table->foreign('USER_ID')->references('USER_ID')->on('USER');
            $table->longText('CONTENT');
            $table->unsignedInteger('COMMENTBEFORE_ID');//TODO: ID cua binh luan truoc do.
            $table->char('STATUS', 2);
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
        Schema::dropIfExists('COMMENT');
    }
}
