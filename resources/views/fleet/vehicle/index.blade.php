@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Vehicles</div>
                    @if($vehicles->count() > 0)
                        <div class="float-right">
                            <a href="{{ route('fleet.vehicle.create') }}" class="btn btn-success">Create</a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($vehicles->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="text-right" width="6em">&nbsp;</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Model</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehicles as $vehicle)
                                <tr>
                                    <td class="text-right align-middle">
                                        <i class="fas fa-car"></i>
                                    </td>
                                    <td class="align-middle">
                                        <div><a href="{{ route('fleet.vehicle.show', $vehicle) }}">{{ $vehicle->fleet_nr }}</a></div>
                                        <small>{{ $vehicle->reg_nr }}</small>
                                    </td>
                                    <td class="align-middle">{{ $vehicle->type->name }}</td>
                                    <td class="align-middle">
                                        <div><small>{{ $vehicle->model->make->name }}</small></div>
                                        <div>{{ $vehicle->model->name }}</div>
                                    </td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('fleet.vehicle.edit', $vehicle) }}">Edit</a> |
                                        <a href="{{ route('fleet.vehicle.delete', $vehicle) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card-body text-center py-5">
                            <p>You haven't created any vehicles yet!</p>
                            <a href="{{ route('fleet.vehicle.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                {{ $vehicles->links() }}
            </div>
        </div>
    </div>
@endsection
