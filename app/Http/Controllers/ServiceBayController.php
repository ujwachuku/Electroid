<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceBayRequest;
use App\Repositories\ServiceBayRepository;
use App\ServiceBay;

class ServiceBayController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ServiceBayRepository();
    }

    public function apiAll()
    {
        return ServiceBay::orderBy('name')->get();
    }

    public function index()
    {
        $bays = $this->repository->all();
        return view('service.bay.index', compact('bays'));
    }

    public function create(ServiceBay $bay)
    {
        return view('service.bay.create', compact('bay'));
    }

    public function store(StoreServiceBayRequest $request, ServiceBay $bay)
    {
        $this->repository->store($request, $bay);
        return redirect()->route('service.bay.index')->with('success', 'The service bay was created successfully');
    }

    public function show(ServiceBay $bay)
    {
        return view('service.bay.show', compact('bay'));
    }

    public function edit(ServiceBay $bay)
    {
        return view('service.bay.edit', compact('bay'));
    }

    public function update(StoreServiceBayRequest $request, ServiceBay $bay)
    {
        $this->repository->store($request, $bay);
        return redirect()->route('service.bay.index')->with('success', 'The service bay was updated successfully');
    }

    public function delete(ServiceBay $bay)
    {
        $this->repository->delete($bay);
        return redirect()->route('service.bay.index')->with('success', 'The service bay was deleted successfully');
    }
}
