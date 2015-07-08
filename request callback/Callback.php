<?php

class Callback extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	'mobile' => 'required|numeric|digits_between:10,10',
	
	];

	// Don't forget to fill this array
	protected $fillable = ['id','country_code','mobile','request_date',
							'status','callback_admin','callback_date','remarks',
							'mobile1','country_code1'];

}