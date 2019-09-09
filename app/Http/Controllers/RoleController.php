<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Repositories\RoleRepository;
use App\Role;

class RoleController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RoleRepository();
    }

    public function apiAll()
    {
        return Role::orderBy('name')->get();
    }

    public function index()
    {
        $roles = $this->repository->all();
        return view('user.role.index', compact('roles'));
    }

    public function create(Role $role)
    {
        return view('user.role.create', compact('role'));
    }

    public function store(StoreRoleRequest $request, Role $role)
    {
        $this->repository->store($request, $role);
        return redirect()->route('user.role.index')->with('success', 'The role was created successfully');
    }

    public function show(Role $role)
    {
        return view('user.role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view('user.role.edit', compact('role'));
    }

    public function update(StoreRoleRequest $request, Role $role)
    {
        $this->repository->store($request, $role);
        return redirect()->route('user.role.index')->with('success', 'The role was updated successfully');
    }

    public function delete(Role $role)
    {
        $this->repository->delete($role);
        return redirect()->route('user.role.index')->with('success', 'The role was deleted successfully');
    }
}
