<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //

    protected $table = 'persons';
    protected $fillable = [
    	'firstname','middlename','lastname','suffix','address','tribe_id',
    	];

    public function Casedescription()
    {
    	return $this->belongsTo('App\Casedescription');
    }

    public function Tribe()
    {
    	return $this->belongsTo('App\Tribe');
    }
}
}
