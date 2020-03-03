<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car_model extends Model
{
   protected $fillable= ['car_model'];

   public function car(){
        return $this->hasMany('App\Car');
    }
}
