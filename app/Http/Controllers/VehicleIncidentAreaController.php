<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleIncidentAreaRequest;
use App\Repositories\VehicleIncidentAreaRepository;
use App\VehicleIncidentArea;
use Illuminate\Http\Request;

class VehicleIncidentAreaController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleIncidentAreaRepository();
    }

    public function apiAll()
    {
        return VehicleIncidentArea::orderBy('name')->get();
    }

    public function index()
    {
        $areas = $this->repository->all();
        return view('incident.area.index', compact('areas'));
    }

    public function create(VehicleIncidentArea $area)
    {
        return view('incident.area.create', compact('area'));
    }

    public function store(StoreVehicleIncidentAreaRequest $request, VehicleIncidentArea $area)
    {
        $this->repository->store($request, $area);
        return redirect()->route('incident.area.index')->with('success', 'The incident area was created successfully');
    }

    public function show(VehicleIncidentArea $area)
    {
        return view('incident.area.show', compact('area'));
    }

    public function edit(VehicleIncidentArea $area)
    {
        return view('incident.area.edit', compact('area'));
    }

    public function update(StoreVehicleIncidentAreaRequest $request, VehicleIncidentArea $area)
    {
        $this->repository->store($request, $area);
        return redirect()->route('incident.area.index')->with('success', 'The incident area was updated successfully');
    }

    public function delete(VehicleIncidentArea $area)
    {
        $this->repository->delete($area);
        return redirect()->route('incident.area.index')->with('success', 'The incident area was deleted successfully');
    }
}
