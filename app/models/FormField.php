<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;


class FormField extends Eloquent  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'form_fields';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable=array('field_name','field_label','field_type','field_attribute','default_value','is_required','form_id');

	public function form()
	{
		$this->belongsTo('Form','form_id');
	}
	public function formdata()
	{
		$this->hasOne('FormData','form_field_id');
	}

}
