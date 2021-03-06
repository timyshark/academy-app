<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->notNullable();
            $table->string('last_name')->notNullable();
            $table->string('email')->unique()->notNullable();
            $table->char('gender')->nullable;
            $table->string('picturePath');
            $table->tinyInteger('isActive')->nullable;
            $table->date('dob')->nullable;
            $table->string('school')->nullable;
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
        Schema::dropIfExists('students');
    }
}
