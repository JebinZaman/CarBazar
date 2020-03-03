<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $fillable= ['color'];

    public function car(){
        return $this->hasMany('App\Car');
    }
}
