@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Create Vehicle</div>
                    </div>
                    <form action="{{ route('fleet.vehicle.store') }}" method="post">
                        <div class="card-body">
                            @include('fleet.vehicle.form')
                        </div>
                        <div class="card-footer text-center">
                            <form-submit></form-submit>
                            <form-cancel href="{{ route('fleet.vehicle.index') }}"></form-cancel>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
