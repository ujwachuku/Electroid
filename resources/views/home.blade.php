@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card text-{{ $unattendedIncidentCount > 0 ? 'white' : 'white' }} bg-{{ $unattendedIncidentCount > 0 ? 'danger' : 'success' }} shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title"><i class="fas fa-car-crash"></i> Incidents</h4>
                    <p class="card-text">There is {{ $unattendedIncidentCount > 0 ? $unattendedIncidentCount : 'no' }} unattended incidents.</p>
                    <a href="{{ route('incident.index') }}" class="btn btn-outline-{{ $unattendedIncidentCount > 0 ? 'danger' : 'success' }} bg-white">View Incidents</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title"><i class="fas fa-car"></i> Vehicles</h4>
                    <p class="card-text">There are {{ $vehicleCount > 0 ? $vehicleCount : 'no' }} registered vehicles.</p>
                    <a href="{{ route('fleet.vehicle.index') }}" class="btn btn-outline-primary bg-white">View Vehicles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-primary border-primary shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title"><i class="fas fa-users"></i> Users</h4>
                    <p class="card-text">There are {{ $userCount > 0 ? $userCount : 'no' }} users.</p>
                    <a href="{{ route('user.index') }}" class="btn btn-primary">View Users</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card card-body shadow-sm">
                <h4 class="card-title">Incidents</h4>
                <span class="card-subtitle text-secondary">Last six months</span>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Incidents',
                    //backgroundColor: 'rgb(46,135,230)',
                    borderColor: 'rgb(48,139,236)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                },{
                    label: 'Accidents',
                    //backgroundColor: 'rgb(84,230,86)',
                    borderColor: 'rgb(84,230,86)',
                    data: [4, 2, 30, 7, 12, 5, 7]
                },]
            },

            // Configuration options go here
            options: {}
        });
    </script>
@endpush
