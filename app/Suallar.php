<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suallar extends Model
{

    public function commentSuallar(){
        return $this->hasMany('App\Comment');
    }

    public function userSuallar(){
        return $this->hasMany('App\User');
    }

}
