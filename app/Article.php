<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'articletitle', 
		'articlebody', 
		'articletypes_id', 
		'users_id',
	];

	public function articletypes() 
	{
			return $this->belongsto('App\Articletype');
	}

	public function users() 
	{
			return $this->hasMany('App\User');
	}
}
