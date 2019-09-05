<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleIncident extends Model
{
    public function type()
    {
        return $this->belongsTo('App\VehicleIncidentType', 'type_id');
    }

    public function area()
    {
        return $this->belongsTo('App\VehicleIncidentArea', 'area_id');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle', 'vehicle_id');
    }

    public function isOpen()
    {
        return $this->status_id === '1';
    }
}
