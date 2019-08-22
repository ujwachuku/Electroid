<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleMakeRequest;
use App\Repositories\VehicleMakeRepository;
use App\VehicleMake;

class VehicleMakeController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleMakeRepository();
    }

    public function apiAll()
    {
        return VehicleMake::orderBy('name')->get();
    }

    public function index()
    {
        $makes = $this->repository->all();
        return view('fleet.make.index', compact('makes'));
    }

    public function create(VehicleMake $make)
    {
        return view('fleet.make.create', compact('make'));
    }

    public function store(StoreVehicleMakeRequest $request, VehicleMake $make)
    {
        $this->repository->store($request, $make);
        return redirect()->route('fleet.make.index')->with('success', 'The vehicle make was created successfully');
    }

    public function show(VehicleMake $make)
    {
        return view('fleet.make.show', compact('make'));
    }

    public function edit(VehicleMake $make)
    {
        return view('fleet.make.edit', compact('make'));
    }

    public function update(StoreVehicleMakeRequest $request, VehicleMake $make)
    {
        $this->repository->store($request, $make);
        return redirect()->route('fleet.make.index')->with('success', 'The vehicle make was updated successfully');
    }

    public function delete(VehicleMake $make)
    {
        $this->repository->delete($make);
        return redirect()->route('fleet.make.index')->with('success', 'The vehicle make was deleted successfully');
    }
}
