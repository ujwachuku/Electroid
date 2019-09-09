@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="mt-2 h4">Edit Role</div>
                </div>
                <form action="{{ route('user.role.update', $role) }}" method="post">
                    <div class="card-body">
                        @method('put')
                        @include('user.role.form')
                    </div>
                    <div class="card-footer text-center">
                        <button role="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('user.role.show', $role) }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
