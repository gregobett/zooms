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
        Schema::create('fourthquarter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->integer('mothertongue')->default(0);
            $table->integer('filipino')->default(0);
            $table->integer('english')->default(0);
            $table->integer('mathematics')->default(0);
            $table->integer('science')->default(0);
            $table->integer('ap')->default(0);
            $table->integer('esp')->default(0);
            $table->integer('music')->default(0);
            $table->integer('arts')->default(0);
            $table->integer('pe')->default(0);
            $table->integer('health')->default(0);
            $table->integer('epp')->default(0);
            $table->integer('tle')->default(0);
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
        Schema::dropIfExists('fourthquarter');
    }
};
