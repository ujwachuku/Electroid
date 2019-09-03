<?php


namespace App\Repositories;


use App\VehicleIncidentArea;

class VehicleIncidentAreaRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new VehicleIncidentArea();
        $this->order_by_field = 'name';
    }

    public function store($request, $type)
    {
        $type->name = $request->name;
        return $type->save();
    }
}
