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
        Schema::create('thirdquarter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->integer('mothertongue3')->default(0);
            $table->integer('filipino3')->default(0);
            $table->integer('english3')->default(0);
            $table->integer('mathematics3')->default(0);
            $table->integer('science3')->default(0);
            $table->integer('ap3')->default(0);
            $table->integer('esp3')->default(0);
            $table->integer('music3')->default(0);
            $table->integer('arts3')->default(0);
            $table->integer('pe3')->default(0);
            $table->integer('health3')->default(0);
            $table->integer('epp3')->default(0);
            $table->integer('tle3')->default(0);
            $table->integer('average3')->default(0);
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
        Schema::dropIfExists('thirdquarter');
    }
};
