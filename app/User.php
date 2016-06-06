<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id', 'originoffice_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function Role()
	{
		return $this->belongsTo('App\Role');
	}
	
	public function Casereports()
	{
		return $this->hasMany('App\Casereport');
	}
	
	public function Persons()
	{
		return $this->hasMany('App\Person');
	}
	
	public function Casedescriptions()
	{
		return $this->hasMany('App\Casedescription');
	}

		public function Casenotes()
	{
		return $this->hasMany('App\Casenote');
	}

	public function Notifications()
	{
		return $this->hasMany('App\Notification');
	}
}
