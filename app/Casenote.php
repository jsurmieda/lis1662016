<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casenote extends Model
{
    //

	protected $fillable = [
		'notes', 'notequalifier_id', 'casereport_id', 'cadtcondition_id', 'user_id'
	];

    public function User()
	{
		return $this->belongsTo('App\User');
	}

	    public function Casereport()
	{
		return $this->belongsTo('App\Casereport');
	}

	    public function Cadtcondition()
	{
		return $this->belongsTo('App\Cadtcondition');
	}
}
