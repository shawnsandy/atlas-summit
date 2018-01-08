<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSponsorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sponsors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('contact_name')->nullable();
			$table->string('contact_email', 100)->nullable();
			$table->string('contact_phone', 20)->nullable();
			$table->string('company_name')->nullable();
			$table->text('company_address', 65535)->nullable();
			$table->string('lat', 191)->nullable();
			$table->string('long', 191)->nullable();
			$table->string('company_phone', 25)->nullable();
			$table->string('company_email', 100)->nullable();
			$table->string('banner_image')->nullable();
			$table->string('logo')->nullable();
			$table->text('sponsor_description', 65535)->nullable();
			$table->string('sponsor_slug')->nullable();
			$table->string('sponsor_url')->nullable();
			$table->string('sponsor_level', 55)->nullable();
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
		Schema::drop('sponsors');
	}

}
