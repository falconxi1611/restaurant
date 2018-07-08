<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VOTE', function (Blueprint $table) {
            $table->increments('VOTE_ID');
            //TODO: Truoc mat làm danh gia mon an, bo sung sau danh gia dich vu va menu
            $table->unsignedInteger('FOOD_ID');
            $table->foreign('FOOD_ID')->references('FOOD_ID')->on('FOOD');
            $table->unsignedInteger('STAR');//TODO: Tính theo tỉ lệ: (get số sao người dùng đánh giá + STAR) / 2
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
        Schema::dropIfExists('VOTE');
    }
}
