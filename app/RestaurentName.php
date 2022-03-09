<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurentName extends Model
{
    protected $table="restaurent_names";
    
    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }

    public function restmenu()
    {
        return $this->hasMany('App\RestaurantMenu','restaurent_name_id');
    }
    
}
