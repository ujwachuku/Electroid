<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceTeamRequest;
use App\Repositories\ServiceTeamRepository;
use App\ServiceTeam;

class ServiceTeamController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ServiceTeamRepository();
    }

    public function apiAll()
    {
        return ServiceTeam::orderBy('name')->get();
    }

    public function index()
    {
        $teams = $this->repository->all();
        return view('service.team.index', compact('teams'));
    }

    public function create(ServiceTeam $team)
    {
        return view('service.team.create', compact('team'));
    }

    public function store(StoreServiceTeamRequest $request, ServiceTeam $team)
    {
        $this->repository->store($request, $team);
        return redirect()->route('service.team.index')->with('success', 'The service team was created successfully');
    }

    public function show(ServiceTeam $team)
    {
        return view('service.team.show', compact('team'));
    }

    public function edit(ServiceTeam $team)
    {
        return view('service.team.edit', compact('team'));
    }

    public function update(StoreServiceTeamRequest $request, ServiceTeam $team)
    {
        $this->repository->store($request, $team);
        return redirect()->route('service.team.index')->with('success', 'The service team was updated successfully');
    }

    public function delete(ServiceTeam $team)
    {
        $this->repository->delete($team);
        return redirect()->route('service.team.index')->with('success', 'The service team was deleted successfully');
    }
}
