@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header clearfix">
                        <div class="float-left">
                            <div class="mt-2 h4">Viewing Incident</div>
                        </div>
                        <div class="float-right">
                            @if($incident->isOpen())
                                <div class="py-2 font-weight-bold text-danger">Unresolved</div>
                            @else
                                <div class="py-2 font-weight-bold text-success">Resolved</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4 text-right">Ref. Nr</dt><dd class="col-md-8">{{ $incident->code }}</dd>
                                    <dt class="col-md-4 text-right">Reported</dt><dd class="col-md-8">{{ $incident->reported_at }}</dd>
                                    <dt class="col-md-4 text-right">Vehicle</dt><dd class="col-md-8">{{ $incident->vehicle->fleet_nr }}</dd>
                                    <dt class="col-md-4 text-right">Driver</dt><dd class="col-md-8">{{ $incident->driven_by }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4 text-right">Type</dt><dd class="col-md-8">{{ $incident->type->name }}</dd>
                                    <dt class="col-md-4 text-right">Area</dt><dd class="col-md-8">{{ $incident->area->name }}</dd>
                                    <dt class="col-md-4 text-right">Pax Impact</dt><dd class="col-md-8">{{ $incident->pax_impact_id === 1 ? 'Yes' : 'No' }}</dd>
                                    <dt class="col-md-4 text-right">Reported By</dt><dd class="col-md-8">{{ $incident->reported_by }}</dd>
                                </dl>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div>{{ $incident->description }}</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4 text-right">Attended By</dt><dd class="col-md-8">{{ $incident->attended_by }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4 text-right">Attended At</dt><dd class="col-md-8">{{ $incident->attended_at }}</dd>
                                </dl>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div>{{ $incident->action }}</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4 text-right">Action By</dt><dd class="col-md-8">{{ $incident->action_by }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-4 text-right">Action At</dt><dd class="col-md-8">{{ $incident->action_at }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        @if($incident->isOpen())
                        <a href="{{ route('incident.edit', $incident) }}" class="btn btn-primary">Edit</a>
                        @endif

                        <a href="{{ route('incident.clone', $incident) }}" class="btn btn-warning">Clone</a>
                        @if($incident->isOpen())
                            <a href="{{ route('incident.close', $incident) }}" class="btn btn-success">Close</a>
                        @else
                            <a href="{{ route('incident.reopen', $incident) }}" class="btn btn-info">Re-Open</a>
                        @endif
                        <form-delete href="{{ route('incident.delete', $incident) }}"></form-delete>
                        <a href="{{ route('incident.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
