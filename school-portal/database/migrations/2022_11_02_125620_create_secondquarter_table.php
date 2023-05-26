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
        Schema::create('secondquarter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->integer('mothertongue2')->default(0);
            $table->integer('filipino2')->default(0);
            $table->integer('english2')->default(0);
            $table->integer('mathematics2')->default(0);
            $table->integer('science2')->default(0);
            $table->integer('ap2')->default(0);
            $table->integer('esp2')->default(0);
            $table->integer('music2')->default(0);
            $table->integer('arts2')->default(0);
            $table->integer('pe2')->default(0);
            $table->integer('health2')->default(0);
            $table->integer('epp2')->default(0);
            $table->integer('tle2')->default(0);
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
        Schema::dropIfExists('secondquarter');
    }
};
