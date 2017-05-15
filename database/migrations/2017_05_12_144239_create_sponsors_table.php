<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by LaravelMigration.spBundle
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('contact_name', 255)->nullable();
            $table->string('contact_email', 100)->nullable();
            $table->string('contact_phone', 20)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_phone', 25)->nullable();
            $table->string('company_email', 100)->nullable();
            $table->string('banner_image', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->text('sponsor_description')->nullable();
            $table->string('sponsor_slug', 255)->nullable();
            $table->string('sponsor_url', 255)->nullable();
            $table->string('sponsor_level', 55)->nullable();

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
