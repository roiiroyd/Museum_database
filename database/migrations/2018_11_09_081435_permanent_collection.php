<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PermanentCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permanent_collection', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('status');
            $table->date('dateRequire');
            $table->string('cost');
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
        Schema::dropIfExists('permanent_collection');
    }
}
