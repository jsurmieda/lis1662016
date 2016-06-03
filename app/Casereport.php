<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casereport extends Model
{
    //

    protected $table='Casereports';
    protected $fillable=[
    	'cadtcondition_id','receiptDate','infoSource','incidentLocation','incidentDate','casetype_id','originoffice_id', 'user_id',
    	];

    public function Casedescriptions()
    {
    	return $this->hasMany('App\Casedescription');
    }

    public function Cadtcondition()
    {
    	return $this->belongsTo('App\Cadtcondition');
    }

    public function Casetype()
    {
    	return $this->belongsTo('App\Casetype');
    }
    public function Originoffice()
    {
    	return $this->belongsTo('App\Originoffice');
    }
	
	public function User()
	{
		return $this->belongsTo('App\User');
	}
}
