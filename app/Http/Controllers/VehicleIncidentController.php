<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleIncidentRequest;
use App\Repositories\VehicleIncidentRepository;
use App\VehicleIncident;

class VehicleIncidentController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleIncidentRepository();
    }

    public function apiAll()
    {
        return VehicleIncident::orderBy('name')->get();
    }

    public function index()
    {
        $incidents = $this->repository->all();
        return view('incident.index', compact('incidents'));
    }

    public function create(VehicleIncident $incident)
    {
        return view('incident.create', compact('incident'));
    }

    public function store(StoreVehicleIncidentRequest $request, VehicleIncident $incident)
    {
        $this->repository->store($request, $incident);
        return redirect()->route('incident.index')->with('success', 'The vehicle incident was created successfully');
    }

    public function show(VehicleIncident $incident)
    {
        return view('incident.show', compact('incident'));
    }

    public function edit(VehicleIncident $incident)
    {
        return view('incident.edit', compact('incident'));
    }

    public function update(StoreVehicleIncidentRequest $request, VehicleIncident $incident)
    {
        $this->repository->store($request, $incident);
        return redirect()->route('incident.index')->with('success', 'The vehicle incident was updated successfully');
    }

    public function delete(VehicleIncident $incident)
    {
        $this->repository->delete($incident);
        return redirect()->route('incident.index')->with('success', 'The vehicle incident was deleted successfully');
    }
}
