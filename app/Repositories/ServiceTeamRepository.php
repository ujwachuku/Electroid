<?php


namespace App\Repositories;


use App\ServiceTeam;

class ServiceTeamRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new ServiceTeam();
        $this->order_by_field = 'name';
    }

    public function store($request, $type)
    {
        $type->name = $request->name;
        return $type->save();
    }
}
