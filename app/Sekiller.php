<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekiller extends Model
{
    public function sekillerToSlider(){
        return $this->hasMany('App\Slider');
    }
}
