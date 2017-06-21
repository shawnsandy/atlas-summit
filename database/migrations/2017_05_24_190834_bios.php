<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("bios", function(Blueprint $blueprint) {
           $blueprint->increments("id");
           $blueprint->integer("user_id")->unsigned();
           $blueprint->foreign("user_id")->references("id")->on("users");
           $blueprint->string("avatar");
           $blueprint->string('job_title');
           $blueprint->text('biography');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::dropIfExists('bios');
    }
}
