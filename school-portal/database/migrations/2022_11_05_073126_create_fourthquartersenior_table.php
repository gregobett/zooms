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
        Schema::create('fourthquartersenior', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->integer('oral4')->default(0); 
            $table->integer('reading4')->default(0);
            $table->integer('komunikasyon4')->default(0);
            $table->integer('pagbasa4')->default(0);
            $table->integer('century4')->default(0);
            $table->integer('contemporary4')->default(0);
            $table->integer('media4')->default(0);
            $table->integer('math4')->default(0);
            $table->integer('statistics4')->default(0);
            $table->integer('earth4')->default(0);
            $table->integer('science4')->default(0);
            $table->integer('philosophy4')->default(0);
            $table->integer('health4')->default(0);
            $table->integer('personal4')->default(0);
            $table->integer('culture4')->default(0);
            $table->integer('average4')->default(0);
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
        Schema::dropIfExists('fourthquartersenior');
    }
};
