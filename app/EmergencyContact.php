<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    protected $table="emergency_contacts";

    public function location()
    {
        return $this->belongsTO('App\Location','location_id');
    }

}
