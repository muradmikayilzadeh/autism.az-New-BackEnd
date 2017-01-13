<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function sekil()
    {
    	return $this->hasMany('App\Sekiller');
    }
}
