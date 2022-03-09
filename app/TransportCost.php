<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportCost extends Model
{
    protected $table="transport_costs";

    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }
    
    public function transporttype()
    {
        return $this->belongsTo('App\TransportType','transport_type_id');
    }
    public function category()
    {
        return $this->belongsTo('App\TransportCategory','transport_category_id');
    }
}
