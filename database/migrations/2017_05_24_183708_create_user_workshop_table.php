<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_workshop');
        Schema::create('user_workshop', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('workshop_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('workshop_id')->references('id')->on('workshops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_workshop');
    }
}
