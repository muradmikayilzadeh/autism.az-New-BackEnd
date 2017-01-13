<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oyun extends Model
{
    public function rate()
    {
    	return $this->hasMany('App\Rate');
    }
}
