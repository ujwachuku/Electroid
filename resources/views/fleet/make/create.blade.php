@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="mt-2 h4">Create Vehicle Make</div>
                </div>
                <form action="{{ route('fleet.make.store') }}" method="post">
                    <div class="card-body">
                        @include('fleet.make.form')
                    </div>
                    <div class="card-footer text-center">
                        <form-submit></form-submit>
                        <form-cancel href="{{ route('fleet.make.index') }}"></form-cancel>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
