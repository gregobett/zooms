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
            $table->integer('mothertongue4')->default(0);
            $table->integer('filipino4')->default(0);
            $table->integer('english4')->default(0);
            $table->integer('mathematics4')->default(0);
            $table->integer('science4')->default(0);
            $table->integer('ap4')->default(0);
            $table->integer('esp4')->default(0);
            $table->integer('music4')->default(0);
            $table->integer('arts4')->default(0);
            $table->integer('pe4')->default(0);
            $table->integer('health4')->default(0);
            $table->integer('epp4')->default(0);
            $table->integer('tle4')->default(0);
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
        Schema::dropIfExists('fourthquarter');
    }
};
