<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleIncidentArea extends Model
{
    public function incidents()
    {
        return $this->hasMany('App\VehicleIncident', 'area_id');
    }
}
