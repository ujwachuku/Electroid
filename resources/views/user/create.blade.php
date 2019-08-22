@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create User</div>
                    <form action="{{ route('user.store') }}" method="post">
                        <div class="card-body">
                            @include('user.form')
                        </div>
                        <div class="card-footer text-center">
                            <form-submit></form-submit>
                            <form-cancel href="{{ route('user.index') }}"></form-cancel>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
