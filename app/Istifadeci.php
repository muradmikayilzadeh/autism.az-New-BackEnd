<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Istifadeci extends Model
{
    protected $fillable = [
        'name', 'email', 'password','surname','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // public function comment(){
    //     return $this->hasMany('App\Comment');
    // }

    // public function rate(){
    //     return $this->hasMany('App\Rate');
    // }
}
