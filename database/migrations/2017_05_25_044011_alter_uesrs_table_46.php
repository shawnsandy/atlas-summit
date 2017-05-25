<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUesrsTable46 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $blueprint) {
            $blueprint->string('email')->nullable()->change();
            $blueprint->string('rfid')->nullable()->change();
            $blueprint->string('password')->nullable()->change();
            $blueprint->string('first_name')->nullable()->change();
            $blueprint->string('last_name')->nullable()->change();
            $blueprint->integer('region_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
