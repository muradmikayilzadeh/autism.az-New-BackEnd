<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function rateToOyun(){
        return $this->belongsTo('App\Oyun');
    }

    public function rateToUser(){
        return $this->hasMany('App\User');
    }
}
