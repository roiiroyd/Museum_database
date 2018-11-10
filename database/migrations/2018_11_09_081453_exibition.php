<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exibition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exibition', function (Blueprint $table) {
            $table->integer('exibitionID');
            $table->string('name')->uniqe();
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('numberOfAttend');
            $table->timestamps();

            $table->primary('exibitionID');
            

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
