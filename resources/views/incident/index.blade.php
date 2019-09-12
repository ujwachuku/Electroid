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
                @if($incidents->count() > 0)
                    @foreach($incidents as $incident)
                        <div class="d-flex py-1 border-bottom">
                            <div class="col-md-1 py-2 text-center">
                                <i class="fas fa-car-crash"></i>
                            </div>
                            <div class="col-md-3">
                                <small class="text-secondary">{{ $incident->type->name }}</small>
                                <div>
                                    <a href="{{ route('incident.show', $incident) }}">{{ $incident->code }}</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <small class="text-secondary">{{ $incident->area->name }}</small>
                                <div>{{ $incident->vehicle->fleet_nr }}</div>
                            </div>
                            <div class="col-md-2 py-1">
                                @if($incident->isOpen())
                                    <div class="p-2 font-weight-bold text-danger text-center">Open</div>
                                @else
                                    <div class="p-2 text-success text-center">Closed</div>
                                @endif
                            </div>
                            <div class="col-md-3 py-2 text-right">
                                @if($incident->isOpen())
                                <a href="{{ route('incident.edit', $incident) }}" class="p-1"><i class="fas fa-pen"></i></a>
                                <a href="{{ route('incident.close', $incident) }}" class="p-1"><i class="fas fa-lock"></i></a>
                                @else
                                    <a href="{{ route('incident.reopen', $incident) }}" class="p-1"><i class="fas fa-lock-open"></i></a>
                                @endif
                                <a href="{{ route('incident.delete', $incident) }}" class="p-1"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card-body text-center py-5">
                        <p>You haven't created any vehicle incidents yet!</p>
                        <a href="{{ route('incident.create') }}" class="btn btn-primary">Create</a>
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div>{{ $incidents->links() }}</div>
            </div>
        </div>
    </div>
@endsection
