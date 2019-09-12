<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleMake extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function vehicles()
    {
        return $this->hasManyThrough('App\Vehicle', 'App\VehicleModel', 'make_id', 'model_id');
    }
}
