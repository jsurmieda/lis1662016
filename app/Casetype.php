<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casetype extends Model
{
    //
    public function Casereports()
    {
    	return $this->belongsTo('App\Casereport');
    }
}
