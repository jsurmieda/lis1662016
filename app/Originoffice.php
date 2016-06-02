<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Originoffice extends Model
{
    //
    public function Casereports()
    {
    	return $this->hasMany('App\Casereport');
    }
}
