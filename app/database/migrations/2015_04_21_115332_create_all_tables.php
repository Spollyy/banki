<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('email');
            $table->char('password');
        });

        Schema::create('posts', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('keywords');
            $table->text('text');
            $table->text('description');
            $table->char('title');
            $table->char('url');
            $table->char('file');
            $table->integer('pub_date');

        });

        Schema::create('articles', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('keywords');
            $table->text('text');
            $table->text('description');
            $table->char('title');
            $table->char('url');
            $table->char('file');
            $table->integer('pub_date');

        });

        Schema::create('rubrics', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
        });

        Schema::create('rtp', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('post_id');
            $table->integer('rubric_id');
        });

        Schema::create('rta', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('article_id');
            $table->integer('rubric_id');
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
