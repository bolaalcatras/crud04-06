<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function PersonVehicle (){
        return $this->hasMany('App\Models\PersonVehicle');
    }
}
