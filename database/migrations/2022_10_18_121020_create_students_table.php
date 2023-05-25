<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('religion');
            $table->string('grade');
            $table->string('section');
            $table->string('nationality');
            $table->string('email');
            $table->string('phone');
            $table->string('fathersname');
            $table->string('foccupation');
            $table->string('mothersname');
            $table->string('moccupation');
            $table->text('address');
            $table->string('photo');
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
};
