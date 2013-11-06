<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function(Blueprint $table){

			$table->increments('id');
			$table->string('name')->uniqid();
			$table->string('password');
			$table->string('email')->uniqid();
		});
	}

	/**s
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}