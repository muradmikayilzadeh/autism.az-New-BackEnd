<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    // protected $fillable =  ['name', 'surname', 'email', 'password', 'created_at', 'updated_at'];

    public function commentAdmin(){
        return $this->hasMany('App\Comment');
    }

    public function meqale(){
        return $this->hasMany('App\Meqale');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
