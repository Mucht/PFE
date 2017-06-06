<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	public function up()
	{
		Schema::create('games', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->string('game_id');
			$table->date('date');
			$table->time('appointment')->nullable();
			$table->string('host');
			$table->string('visitor');
			$table->string('score')->nullable();
			$table->string('duty')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('games');
	}
}