<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function accident (){
        return $this->hasMany('App\Models\accident');
    }
    public function PersonVehicle (){
        return $this->hasMany('App\Models\PersonVehicle');
    }

}
