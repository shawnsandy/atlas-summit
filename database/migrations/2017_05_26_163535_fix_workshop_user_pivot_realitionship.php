<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixWorkshopUserPivotRealitionship extends Migration
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
            $table->integer('user_id');
            $table->integer('workshop_id');

            $table->primary('user_id', "workshop_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_workshop', function (Blueprint $table) {
            //
        });
    }
}
