@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="mt-2 h4">Create Role</div>
                </div>
                <form action="{{ route('user.role.store') }}" method="post">
                    <div class="card-body">
                        @include('user.role.form')
                    </div>
                    <div class="card-footer text-center">
                        <form-submit></form-submit>
                        <form-cancel href="{{ route('user.role.index') }}"></form-cancel>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
