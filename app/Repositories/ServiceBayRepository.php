<?php


namespace App\Repositories;


use App\ServiceBay;

class ServiceBayRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new ServiceBay();
        $this->order_by_field = 'name';
    }

    public function store($request, $type)
    {
        $type->name = $request->name;
        return $type->save();
    }
}
