<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censors', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('temperature');
            $table->string('temperature_status');
            $table->unsignedBigInteger('heartbeat');
            $table->string('heartbeat_status');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('censors');
    }
}
