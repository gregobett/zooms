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
        Schema::create('thirdquartersenior', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->integer('oral')->default(0); 
            $table->integer('reading')->default(0);
            $table->integer('komunikasyon')->default(0);
            $table->integer('pagbasa')->default(0);
            $table->integer('century')->default(0);
            $table->integer('contemporary')->default(0);
            $table->integer('media')->default(0);
            $table->integer('math')->default(0);
            $table->integer('statistics')->default(0);
            $table->integer('earth')->default(0);
            $table->integer('science')->default(0);
            $table->integer('philosophy')->default(0);
            $table->integer('health')->default(0);
            $table->integer('personal')->default(0);
            $table->integer('culture')->default(0);
            $table->integer('average')->default(0);
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
        Schema::dropIfExists('thirdquartersenior');
    }
};
