<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleIncidentType extends Model
{
    public function incidents()
    {
        return $this->hasMany('App\VehicleIncident', 'type_id');
    }
}
