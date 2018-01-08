<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkshopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workshops', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->text('description', 65535)->nullable();
			$table->string('date', 191);
			$table->string('start_time', 191);
			$table->string('end_time', 191);
			$table->integer('room_id');
			$table->timestamps();
			$table->string('cover_image', 191)->nullable();
			$table->integer('seats')->nullable();
			$table->string('key', 191);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workshops');
	}

}
