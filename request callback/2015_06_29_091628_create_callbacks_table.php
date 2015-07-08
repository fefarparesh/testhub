<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callbacks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('country_code');
            $table->string('mobile');
            $table->date('request_date');
            $table->string('status');
            $table->string('callback_admin');
            $table->date('callback_date');
            $table->string('remarks');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callbacks');
	}

}
