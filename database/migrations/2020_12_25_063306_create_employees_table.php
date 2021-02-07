<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('username')->unique();
            // $table->string('password');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            // $table->string('email')->unique();
            $table->string('placeofbirth');
            $table->date('dateofbirth');
            $table->text('address');
            $table->string('company');
            $table->string('job');
            // $table->set('level', ['Admin','User']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            // $table->text('profile_photo_path')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
