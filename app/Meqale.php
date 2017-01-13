<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meqale extends Model
{
    public function meqaleToHekim(){
        return $this->belongsTo('App\Hekimler');
    }

    public function meqaleToAdmin(){
        return $this->belongsTo('App\Admin');
    }

    protected $fillable = ['title', 'text'];
}
