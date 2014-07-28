<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostAndUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        DB::transaction(function(){

            if (!Schema::hasTable('users'))
                Schema::create('users', function($table)
                {
                    $table->increments('id');

                    $table->string('first_name', 20)->nullable();
                    $table->string('last_name', 20)->nullable();
                    $table->string('login', 64);
                    $table->string('password', 64);
                });

            if (!Schema::hasTable('posts'))
                Schema::create('posts', function($table)
                {
                    $table->increments('id');

                    $table->string('title', 256);
                    $table->text('content');
                    $table->integer('user_id');
                    $table->timestamps();
                });
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        if (Schema::hasTable('posts'))
            Schema::drop('posts');
        if (Schema::hasTable('users'))
            Schema::drop('users');
    }

}
