@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Viewing Vehicle</div>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-4 text-right">Type:</dt><dd class="col-md-8">{{ $vehicle->type->name }}</dd>
                            <dt class="col-md-4 text-right">Make:</dt><dd class="col-md-8">{{ $vehicle->model->make->name }}</dd>
                            <dt class="col-md-4 text-right">Model:</dt><dd class="col-md-8">{{ $vehicle->model->name }}</dd>
                            <dt class="col-md-4 text-right">Fleet Nr:</dt><dd class="col-md-8">{{ $vehicle->fleet_nr }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('fleet.vehicle.edit', $vehicle) }}" class="btn btn-primary">Edit</a>
                        <form-delete href="{{ route('fleet.vehicle.delete', $vehicle) }}"></form-delete>
                        <a href="{{ route('fleet.vehicle.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
