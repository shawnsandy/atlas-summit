<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyToBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bios', function (Blueprint $table) {
            $table->text("company")->nullable()->after('biography');
            $table->text("position")->nullable()->after('biography');
            $table->text("location")->nullable()->after('biography');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bios', function (Blueprint $table) {
            //
        });
    }
}
