<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleIncidentTypeRequest;
use App\Repositories\VehicleIncidentTypeRepository;
use App\VehicleIncidentType;

class VehicleIncidentTypeController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleIncidentTypeRepository();
    }

    public function apiAll()
    {
        return VehicleIncidentType::orderBy('name')->get();
    }

    public function index()
    {
        $types = $this->repository->all();
        return view('incident.type.index', compact('types'));
    }

    public function create(VehicleIncidentType $type)
    {
        return view('incident.type.create', compact('type'));
    }

    public function store(StoreVehicleIncidentTypeRequest $request, VehicleIncidentType $type)
    {
        $this->repository->store($request, $type);
        return redirect()->route('incident.type.index')->with('success', 'The incident type was created successfully');
    }

    public function show(VehicleIncidentType $type)
    {
        return view('incident.type.show', compact('type'));
    }

    public function edit(VehicleIncidentType $type)
    {
        return view('incident.type.edit', compact('type'));
    }

    public function update(StoreVehicleIncidentTypeRequest $request, VehicleIncidentType $type)
    {
        $this->repository->store($request, $type);
        return redirect()->route('incident.type.index')->with('success', 'The incident type was updated successfully');
    }

    public function delete(VehicleIncidentType $type)
    {
        $this->repository->delete($type);
        return redirect()->route('incident.type.index')->with('success', 'The incident type was deleted successfully');
    }
}
