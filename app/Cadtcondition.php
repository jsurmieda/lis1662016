<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadtcondition extends Model
{
    //
    public function Casenote()
    {
        return $this->hasMany('App\Casenote');
    }
}
