@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Viewing Incident Area</div>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-4 text-right">Name:</dt><dd class="col-md-8">{{ $area->name }}</dd>
                            <dt class="col-md-4 text-right">Incidents:</dt><dd class="col-md-8">{{ $area->incidents->count() }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('incident.area.edit', $area) }}" class="btn btn-primary">Edit</a>
                        <form-delete href="{{ route('incident.area.delete', $area) }}"></form-delete>
                        <a href="{{ route('incident.area.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
