<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
	
	public function User()
	{
		return $this->belongsTo('App\User');
	}
}

