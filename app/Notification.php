<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
	protected $fillable =[
		'subject', 'body', 'user_id',
	];

	public function User()
	{
		return $this->belongsTo('App\User');
	}
}
