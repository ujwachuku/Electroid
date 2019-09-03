@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Viewing Incident</div>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-4 text-right">Code:</dt><dd class="col-md-8">{{ $incident->code }}</dd>
                            <dt class="col-md-4 text-right">Vehicle:</dt><dd class="col-md-8">{{ $incident->vehicle->fleet_nr }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('incident.edit', $incident) }}" class="btn btn-primary">Edit</a>
                        <form-delete href="{{ route('incident.delete', $incident) }}"></form-delete>
                        <a href="{{ route('incident.clone', $incident) }}" class="btn btn-warning">Clone</a>
                        <a href="{{ route('incident.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
