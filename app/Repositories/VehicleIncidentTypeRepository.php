<?php


namespace App\Repositories;


use App\VehicleIncidentType;

class VehicleIncidentTypeRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new VehicleIncidentType();
        $this->order_by_field = 'name';
    }

    public function store($request, $type)
    {
        $type->name = $request->name;
        $type->description = $request->description;
        return $type->save();
    }
}
