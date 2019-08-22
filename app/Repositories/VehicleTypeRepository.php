<?php


namespace App\Repositories;


use App\VehicleType;

class VehicleTypeRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new VehicleType();
        $this->order_by_field = 'name';
    }

    public function store($request, $type)
    {
        $type->name = $request->name;
        return $type->save();
    }
}
