<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inserting extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('index', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->char('description');
            $table->char('keywords');
            $table->char('text');
            $table->char('h1');
            $table->char('file');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
