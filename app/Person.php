<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //

    protected $table = 'persons';
    public function Casedescription()
    {
    	return $this->belongsTo('App\Casedescription');
    }
}
