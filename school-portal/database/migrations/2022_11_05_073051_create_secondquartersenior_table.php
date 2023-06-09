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
        Schema::create('secondquartersenior', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->integer('oral2')->default(0); 
            $table->integer('reading2')->default(0);
            $table->integer('komunikasyon2')->default(0);
            $table->integer('pagbasa2')->default(0);
            $table->integer('century2')->default(0);
            $table->integer('contemporary2')->default(0);
            $table->integer('media2')->default(0);
            $table->integer('math2')->default(0);
            $table->integer('statistics2')->default(0);
            $table->integer('earth2')->default(0);
            $table->integer('science2')->default(0);
            $table->integer('philosophy2')->default(0);
            $table->integer('health2')->default(0);
            $table->integer('personal2')->default(0);
            $table->integer('culture2')->default(0);
            $table->integer('average2')->default(0);
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
        Schema::dropIfExists('secondquartersenior');
    }
};
