<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;


class FormData extends Eloquent  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'form_data';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable=array('record_id','form_fields_id','value_data','value_key');

	public function record()
	{
		$this->belongsTo('Record','record_id');
	}
	public function formfield()
	{
		$this->belongsTo('FormField','form_field_id');
	}

}
