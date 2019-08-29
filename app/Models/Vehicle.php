<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    public function type()
    {
        return $this->belongsTo('App\VehicleType', 'type_id');
    }

    public function make()
    {
        return $this->model->make;
    }

    public function model()
    {
        return $this->belongsTo('App\VehicleModel', 'model_id');
    }
}
