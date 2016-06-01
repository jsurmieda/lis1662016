<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casereport extends Model
{
    //
    public function Casedescription()
    {
    	return $this->hasMany('App\Casedescription');
    }
}
