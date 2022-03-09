<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantMenu extends Model
{
    protected $table="restaurant_menus";
    
    public function restname()
    {
        return $this->belongsTo('App\RestaurentName','restaurent_name_id');
    }
}
