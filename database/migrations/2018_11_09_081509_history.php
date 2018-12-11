<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class History extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('bookingNo');
            $table->integer('regisNo');
            $table->integer('exhibitionID');
            $table->date('bookingDate');
            $table->timestamps();
            
            // $table->primary('bookingNo');
            $table->foreign('exhibitionID')->references('exhibitionID')->on('exhibition');
            // $table->foreign('regisNo')->references('regisNo')->on('participants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hisory');
    }
}
