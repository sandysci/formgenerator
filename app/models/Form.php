<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;


class Form extends Eloquent  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'forms';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable=array('name','description');

	public function formfield()
	{
		$this->hasMany('FormField','form_id');
	}

	public function record()
	{
		$this->belongsTo('Record','form_id');
	}
}
