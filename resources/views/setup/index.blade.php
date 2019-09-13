@extends('layouts.app')
@section('content')
    <div class="card-deck">
        <div class="card card-body">
            <h4 class="card-title">Access Control</h4>
            <span class="card-subtitle text-secondary">Setup users, roles and permissions</span>
            <ul class="list-group list-group-flush pt-3">
                <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Users</a>
                <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-user-ninja"></i> Roles</a>
            </ul>
        </div>

        <div class="card card-body">
            <h4 class="card-title">Fleet</h4>
            <span class="card-subtitle text-secondary">Setup vehicle types, makes and models</span>
            <ul class="list-group list-group-flush pt-3">
                <a href="{{ route('fleet.type.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-tractor"></i> Types</a>
                <a href="{{ route('fleet.make.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-car-side"></i> Makes</a>
                <a href="{{ route('fleet.model.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Models</a>
            </ul>
        </div>

        <div class="card card-body">
            <h4 class="card-title">Incidents</h4>
            <span class="card-subtitle text-secondary">Setup incident types and areas</span>
            <ul class="list-group list-group-flush pt-3">
                <a href="{{ route('incident.type.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-car-crash"></i> Types</a>
                <a href="{{ route('incident.area.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-map"></i> Areas</a>
            </ul>
        </div>
    </div>

    <div class="card-deck mt-4">
        <div class="card card-body">
            <h4 class="card-title">Maintenance</h4>
            <span class="card-subtitle text-secondary">Setup service teams and bays</span>
            <ul class="list-group list-group-flush pt-3">
                <a href="{{ route('service.team.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-user-friends"></i> Teams</a>
                <a href="{{ route('service.bay.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-toolbox"></i> Bays</a>
            </ul>
        </div>

        <div class="card card-body">
            <h4 class="card-title">Reporting</h4>
            <span class="card-subtitle text-secondary">Setup scheduled and automated reports</span>
            <ul class="list-group list-group-flush pt-3">
                <a href="{{ route('service.team.index') }}" class="list-group-item list-group-item-action"><i class="fas fa-clock"></i> Scheduled</a>
            </ul>
        </div>
    </div>
@endsection
