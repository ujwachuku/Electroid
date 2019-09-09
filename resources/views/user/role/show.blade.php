@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="mt-2 h4">Viewing Role</div>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-md-4 text-right">Name</dt><dd class="col-md-8">{{ $role->name }}</dd>
                        <dt class="col-md-4 text-right">Users</dt><dd class="col-md-8">{{ $role->users->count() }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('user.role.edit', $role) }}" class="btn btn-primary">Edit</a>
                    <form-delete href="{{ route('user.role.delete', $role) }}"></form-delete>
                    <a href="{{ route('user.role.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
