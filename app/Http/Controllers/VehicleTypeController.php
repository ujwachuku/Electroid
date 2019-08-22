<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleTypeRequest;
use App\Repositories\VehicleTypeRepository;
use App\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleTypeRepository();
    }

    public function index()
    {
        $types = $this->repository->all();
        return view('fleet.type.index', compact('types'));
    }

    public function create(VehicleType $type)
    {
        return view('fleet.type.create', compact('type'));
    }

    public function store(StoreVehicleTypeRequest $request, VehicleType $type)
    {
        $this->repository->store($request, $type);
        return redirect()->route('fleet.type.index')->with('success', 'The vehicle type was created successfully');
    }

    public function show(VehicleType $type)
    {
        return view('fleet.type.show', compact('type'));
    }

    public function edit(VehicleType $type)
    {
        return view('fleet.type.edit', compact('type'));
    }

    public function update(StoreVehicleTypeRequest $request, VehicleType $type)
    {
        $this->repository->store($request, $type);
        return redirect()->route('fleet.type.index')->with('success', 'The vehicle type was updated successfully');
    }

    public function delete(VehicleType $type)
    {
        $this->repository->delete($type);
        return redirect()->route('fleet.type.index')->with('success', 'The vehicle type was deleted successfully');
    }
}
