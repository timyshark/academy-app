<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->notNullable();
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->notNullable;
            $table->string('last_name')->notNullable;
            $table->string('email')->unique()->notNullable();
            $table->char('gender')->nullable;
            $table->string('picturePath')->nullable;
            $table->tinyInteger('isActive')->nullable;
            $table->date('dob')->nullable;
            $table->string('school')->nullable;
            $table->string('password')->notNullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('students');
    }
}
