<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportType extends Model
{
    protected $table="transport_types";

    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }

    public function category()
    {
        return $this->belongsTo('App\TransportCategory','transport_category_id');
    }

    public function transportcost()
    {
        return $this->hasMany('App\TransportCost','transport_type_id');
    }
    
}
