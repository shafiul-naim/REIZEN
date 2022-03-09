<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table="locations";

    public function hotel()
    {
        return $this->hasMany('App\Hotels','location_id');
    }

    public function restaurent()
    {
        return $this->hasMany('App\RestaurentName','location_id');
    }

    public function transport()
    {
        return $this->hasMany('App\TransportType','location_id');
    }
    public function transportcost()
    {
        return $this->hasMany('App\TransportCost','location_id');
    }
    
    public function emergency()
    {
        return $this->hasMany('App\EmergencyContact','location_id');
    }
    
}
