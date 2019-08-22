@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Viewing User</div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-4 text-right">Name:</dt><dd class="col-md-8">{{ $user->name }}</dd>
                            <dt class="col-md-4 text-right">Role:</dt><dd class="col-md-8">{{ $user->roles->first()->name }}</dd>
                            <dt class="col-md-4 text-right">Email:</dt><dd class="col-md-8">{{ $user->email }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('user.edit', $user) }}" class="btn btn-primary">Edit</a>
                        <form-delete href="{{ route('user.delete', $user) }}"></form-delete>
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
