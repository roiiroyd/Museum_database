<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->integer('artistID');
            $table->string('name')->uniqe();
            $table->date('dateBorn');
            $table->date('dateDied')->nullable();
            $table->string('countryOfOrigin');
            $table->string('epoch');
            $table->string('mainStyle');
            $table->string('description')->nullable();
            $table->timestamps();

            $table->primary('artistID');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
