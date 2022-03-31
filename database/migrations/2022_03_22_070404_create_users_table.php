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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id',true,20);
            $table->string('name',30);
            $table->unsignedBigInteger('blockID');
            $table->string('email',40)->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',40);
            $table->rememberToken();
            $table->timestamps();

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
        Schema::dropIfExists('users');
    }
};
