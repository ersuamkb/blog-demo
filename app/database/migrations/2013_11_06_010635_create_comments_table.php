<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments',function(Blueprint $table){
			$table->increments('id');
			$table->integer('article_id');
			$table->integer('category_id');
			$table->integer('visitor_id');
			$table->text('comments');
			$table->string('commented_at');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}