<?php


namespace App\Repositories;


use App\VehicleMake;

class VehicleMakeRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new VehicleMake();
        $this->order_by_field = 'name';
    }

    public function store($request, VehicleMake $make)
    {
        $make->name = $request->name;
        return $make->save();
    }
}
