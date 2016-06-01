<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casedescription extends Model
{
    //
    public function Casereport()
    {
    	return $this->belongsTo('App\Casereport');
    }

    public function Person()
    {
    	return $this->hasOne('App\Person','id');
    }
}
