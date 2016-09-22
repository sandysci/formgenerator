<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;


class Record extends Eloquent  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'records';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable=array('user_id','form_id');


	public function form()
	{
		$this->hasOne('Form','form_id');
	}

	public function user()
	{
		$this->belongsTo('User','user_id');
	}

	public function formdata()
	{
		$this->hasMany('FormData','record_id');
	}
}
