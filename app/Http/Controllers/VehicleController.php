<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Repositories\VehicleRepository;
use App\Vehicle;

class VehicleController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleRepository();
    }

    public function apiAll()
    {
        return Vehicle::orderBy('fleet_nr')->get();
    }

    public function index()
    {
        $vehicles = $this->repository->paginate();
        return view('fleet.vehicle.index', compact('vehicles'));
    }

    public function create(Vehicle $vehicle)
    {
        return view('fleet.vehicle.create', compact('vehicle'));
    }

    public function store(StoreVehicleRequest $request, Vehicle $vehicle)
    {
        $this->repository->store($request, $vehicle);
        return redirect()->route('fleet.vehicle.index')->with('success', 'The vehicle was created successfully');
    }

    public function show(Vehicle $vehicle)
    {
        return view('fleet.vehicle.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('fleet.vehicle.edit', compact('vehicle'));
    }

    public function update(StoreVehicleRequest $request, Vehicle $vehicle)
    {
        $this->repository->store($request, $vehicle);
        return redirect()->route('fleet.vehicle.index')->with('success', 'The vehicle was updated successfully');
    }

    public function delete(Vehicle $vehicle)
    {
        $this->repository->delete($vehicle);
        return redirect()->route('fleet.vehicle.index')->with('success', 'The vehicle was deleted successfully');
    }
}
