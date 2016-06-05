<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casedescription extends Model
{
    //

    protected $table='Casedescriptions';
    protected $fillable=[
        'person_id','relationship_id', 'user_id','casereport_id','cadtcondition_id',
        ];

    public function Casereport()
    {
    	return $this->belongsTo('App\Casereport');
    }

    public function Person()
    {
    	return $this->hasOne('App\Person');
    }
    
    public function Cadtcondition()
    {
        return $this->belongsTo('App\Cadtcondition');
    }

    public function Relationship()
    {
    	return $this->belongsTo('App\Relationship');
    }
	
	public function User()
	{
		return $this->belongsTo('App\User');
	}

}
