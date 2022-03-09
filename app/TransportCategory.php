<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportCategory extends Model
{
    protected $table="transport_categories";

    public function transporttype()
    {
        return $this->hasMany('App\TransportType','transport_category_id');
    }

    public function transportcost()
    {
        return $this->hasMany('App\TransportCost','transport_category_id');
    }
}
