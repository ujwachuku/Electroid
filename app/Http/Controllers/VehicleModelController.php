<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleModelRequest;
use App\Repositories\VehicleModelRepository;
use App\VehicleModel;

class VehicleModelController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleModelRepository();
    }

    public function apiAll()
    {
        return VehicleModel::orderBy('name')->get();
    }

    public function index()
    {
        $models = $this->repository->all();
        return view('fleet.model.index', compact('models'));
    }

    public function create(VehicleModel $model)
    {
        return view('fleet.model.create', compact('model'));
    }

    public function store(StoreVehicleModelRequest $request, VehicleModel $model)
    {
        $this->repository->store($request, $model);
        return redirect()->route('fleet.model.index')->with('success', 'The vehicle model was created successfully');
    }

    public function show(VehicleModel $model)
    {
        return view('fleet.model.show', compact('model'));
    }

    public function edit(VehicleModel $model)
    {
        return view('fleet.model.edit', compact('model'));
    }

    public function update(StoreVehicleModelRequest $request, VehicleModel $model)
    {
        $this->repository->store($request, $model);
        return redirect()->route('fleet.model.index')->with('success', 'The vehicle model was updated successfully');
    }

    public function delete(VehicleModel $model)
    {
        $this->repository->delete($model);
        return redirect()->route('fleet.model.index')->with('success', 'The vehicle model was deleted successfully');
    }
}
