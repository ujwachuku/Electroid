@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Incidents</div>
                    @if($incidents->count() > 0)
                        <div class="float-right">
                            <a href="{{ route('incident.create') }}" class="btn btn-success">Create</a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($incidents->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="text-right" width="6em">&nbsp;</th>
                                <th>Ref. Nr.</th>
                                <th>Vehicle</th>
                                <th>Type</th>
                                <th>Area</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($incidents as $incident)
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-rocket"></i>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('incident.show', $incident) }}">{{ $incident->code }}</a>
                                    </td>
                                    <td class="align-middle">{{ $incident->vehicle->fleet_nr }}</td>
                                    <td class="align-middle">{{ $incident->type->name }}</td>
                                    <td class="align-middle">{{ $incident->area->name }}</td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('incident.edit', $incident) }}">Edit</a> |
                                        <a href="{{ route('incident.clone', $incident) }}">Clone</a> |
                                        <a href="{{ route('incident.delete', $incident) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card-body text-center py-5">
                            <p>You haven't created any vehicle incidents yet!</p>
                            <a href="{{ route('incident.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
