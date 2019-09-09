@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Users</div>
                    @if($users->count() > 0)
                        <div class="float-right">
                            <a href="{{ route('user.create') }}" class="btn btn-success">Create</a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($users->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th width="6em">&nbsp;</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-user"></i>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a>
                                    </td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <td class="align-middle">{{ $user->role()->name }}</td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('user.edit', $user) }}">Edit</a> |
                                        <a href="{{ route('user.delete', $user) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card-body text-center py-5">
                            <p>You haven't created any users yet!</p>
                            <a href="{{ route('user.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
