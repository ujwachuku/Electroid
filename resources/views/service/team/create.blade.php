@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Create Service Team</div>
                    </div>
                    <form action="{{ route('service.team.store') }}" method="post">
                        <div class="card-body">
                            @include('service.team.form')
                        </div>
                        <div class="card-footer text-center">
                            <form-submit></form-submit>
                            <form-cancel href="{{ route('service.team.index') }}"></form-cancel>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
