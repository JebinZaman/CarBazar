<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
   protected $guarded = [];

    public function brands()
    {
        return $this->belongsTo('App\Brand', 'brand');
    }

    public function car_models()
    {
        return $this->belongsTo('App\Car_model', 'car_model');
    }

    public function colors()
    {
        return $this->belongsTo('App\Color', 'color');
    }
}