<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Casereport extends Model
{
    //
    use SoftDeletes;
     protected $dates = ['deleted_at'];

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
