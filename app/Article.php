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
		'mandatory',
		'articletypes_id', 
		'user_id',
	];

	public function articletypes() 
	{
			return $this->belongsTo('App\Articletype');
	}

	public function users() 
	{
			return $this->belongsTo('App\User');
	}
}
