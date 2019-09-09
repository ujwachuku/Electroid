<?php


namespace App\Repositories;


use App\Role;

class RoleRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new Role();
        $this->order_by_field = 'name';
    }

    public function store($request, $role)
    {
        $role->name = $request->name;
        return $role->save();
    }
}
