@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left pt-2">Users</div>
                        <div class="float-right">
                            <a href="{{ route('user.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($users as $user)
                                <li><a href="{{ route('user.show', $user) }}">{{ $user->name }} ({{ $user->roles->first()->name }})</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
