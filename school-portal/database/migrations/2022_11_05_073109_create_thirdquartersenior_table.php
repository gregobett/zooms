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
            $table->integer('oral3')->default(0); 
            $table->integer('reading3')->default(0);
            $table->integer('komunikasyon3')->default(0);
            $table->integer('pagbasa3')->default(0);
            $table->integer('century3')->default(0);
            $table->integer('contemporary3')->default(0);
            $table->integer('media3')->default(0);
            $table->integer('math3')->default(0);
            $table->integer('statistics3')->default(0);
            $table->integer('earth3')->default(0);
            $table->integer('science3')->default(0);
            $table->integer('philosophy3')->default(0);
            $table->integer('health3')->default(0);
            $table->integer('personal3')->default(0);
            $table->integer('culture3')->default(0);
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
        Schema::dropIfExists('thirdquartersenior');
    }
};
