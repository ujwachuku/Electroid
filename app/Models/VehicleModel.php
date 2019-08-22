<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModel extends Model
{
    use SoftDeletes;

    public function make()
    {
        return $this->belongsTo('App\VehicleMake', 'make_id');
    }

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'type_id');
    }
}
