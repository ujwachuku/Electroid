<?php


namespace App\Repositories;


use App\VehicleModel;

class VehicleModelRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new VehicleModel();
        $this->order_by_field = 'name';
    }

    public function store($request, $type)
    {
        $type->name = $request->name;
        $type->make_id = $request->make_id;
        return $type->save();
    }
}
