<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtObject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_object', function (Blueprint $table) {
            $table->integer('artID');
            $table->integer('type');
            $table->integer('artistID');
            $table->string('title');
            $table->string('year',4);
            $table->string('paintType')->nullable();
            $table->string('material')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('style')->nullable();
            $table->integer('exhibitionID')->nullable();
            $table->string('description',200)->nullable();
            $table->timestamps();

            $table->primary('artID');
            $table->foreign('artistID')->references('artistID')->on('artists');
            // $table->foreign('exibitionID')->references('exibitionID')->on('exibition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art_object');
    }
}
