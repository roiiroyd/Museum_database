<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exhibition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibition', function (Blueprint $table) {
            $table->integer('exhibitionID');
            $table->string('name')->uniqe();
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('limitOfAttend');
            $table->integer('numberOfAttend');
            $table->string('detail',3000);
            $table->timestamps();


            $table->primary('exhibitionID');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exibition');
    }
}
