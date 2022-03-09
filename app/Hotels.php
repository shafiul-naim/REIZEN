<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table="hotels";
   
    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }
}
