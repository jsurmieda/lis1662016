<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribe extends Model
{
    //
   	protected $table = 'tribes';

    public function Persons()
    {
    	return $this->hasMany('App\Person');
    }
}
