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
        Schema::create('shops', function (Blueprint $table) {
            $table->bigInteger('id',true,20);
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('blockID');
            $table->string('name',20);
            $table->timestamps();

            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('blockID')->references('id')->on('blocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
