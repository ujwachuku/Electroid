@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>
                    <form action="{{ route('user.update', $user) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('user.form')
                        </div>
                        <div class="card-footer text-center">
                            <button user="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('user.show', $user) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
