<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableFieldsToRegions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regions', function (Blueprint $table) {
            $table->string('lat')->nullable()->change();
            $table->string('long')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('website')->nullable()->change();
            $table->string('logo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('regions', function (Blueprint $table) {
            //
        });
    }
}
