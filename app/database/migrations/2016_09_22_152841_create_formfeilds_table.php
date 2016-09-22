<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormfeildsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form_fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('field_name');
			$table->string('field_label');
			$table->string('field_type');
			$table->string('field_attributes');
			$table->string('default_value');
			$table->string('is_required');
			$table->integer('form_id')->unsigned();
			$table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
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
		Schema::drop('form_fields');
	}

}
