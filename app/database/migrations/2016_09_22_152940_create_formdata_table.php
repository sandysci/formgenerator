<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormdataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form_data', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('value_data');
			$table->string('value_key');
			$table->integer('record_id')->unsigned();
			$table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
			$table->integer('form_fields_id')->unsigned();
			$table->foreign('form_fields_id')->references('id')->on('form_fields')->onDelete('cascade');
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
		Schema::drop('form_data');
	}

}
