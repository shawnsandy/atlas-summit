<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('address', 191);
			$table->string('lat', 191)->nullable();
			$table->string('long', 191)->nullable();
			$table->string('phone', 191)->nullable();
			$table->string('website', 191)->nullable();
			$table->string('logo', 191)->nullable();
			$table->timestamps();
			$table->integer('region_number');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('regions');
	}

}
