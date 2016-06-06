<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articletype extends Model
{/*
    use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'typeName', 
		'typeDescription', 
	];
*/
	public function articletypes() 
	{
			return $this->hasMany('App\Article');
	}
}
