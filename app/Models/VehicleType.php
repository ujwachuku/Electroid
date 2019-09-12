<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleType extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'type_id');
    }
}
