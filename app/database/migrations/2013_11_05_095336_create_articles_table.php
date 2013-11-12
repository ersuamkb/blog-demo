<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles',function(Blueprint $table){
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			$table->integer('categorys_id');
			$table->integer('times');
			$table->text('content');
			$table->string('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorys');
	}

}