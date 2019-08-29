@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Edit Vehicle</div>
                    </div>
                    <form action="{{ route('fleet.vehicle.update', $vehicle) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('fleet.vehicle.form')
                        </div>
                        <div class="card-footer text-center">
                            <button vehicle="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('fleet.vehicle.show', $vehicle) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
