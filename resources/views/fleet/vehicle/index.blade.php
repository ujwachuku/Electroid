@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                <th>Fleet Nr</th>
                                <th>Reg. Nr</th>
                                <th>Make</th>
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
                                        <a href="{{ route('fleet.vehicle.show', $vehicle) }}">{{ $vehicle->fleet_nr }}</a>
                                    </td>
                                    <td class="align-middle">{{ $vehicle->reg_nr }}</td>
                                    <td class="align-middle">{{ $vehicle->model->make->name }}</td>
                                    <td class="align-middle">{{ $vehicle->model->name }}</td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('fleet.vehicle.edit', $vehicle) }}" class="p-1"><i class="fas fa-pen"></i></a>
                                        <a href="{{ route('fleet.vehicle.delete', $vehicle) }}" class="p-1"><i class="fas fa-trash-alt"></i></a>
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
