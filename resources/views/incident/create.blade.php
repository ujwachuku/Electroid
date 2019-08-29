@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Create Vehicle Type</div>
                    </div>
                    <form action="{{ route('fleet.type.store') }}" method="post">
                        <div class="card-body">
                            @include('fleet.type.form')
                        </div>
                        <div class="card-footer text-center">
                            <form-submit></form-submit>
                            <form-cancel href="{{ route('fleet.type.index') }}"></form-cancel>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
