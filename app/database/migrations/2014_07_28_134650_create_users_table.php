<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $t)
        {
            $t->increments('id');
            $t->string('login', 64)->unique();
            $t->string('password', 64);
            $t->string('first_name', 20)->nullable();
            $t->string('last_name', 20)->nullable();

            $t->engine = 'InnoDB';
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
