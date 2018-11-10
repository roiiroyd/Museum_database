<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BorrowedCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_collection', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nameCollection');
            $table->date('dateReturn');
            $table->date('dateBorrow');
            $table->string('address');
            $table->string('phone');
            $table->string('contactPerson');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id')->references('artID')->on('art_object');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowed_collection');
    }
}
