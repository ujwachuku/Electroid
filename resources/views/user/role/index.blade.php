@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Roles</div>
                    @if($roles->count() > 0)
                        <div class="float-right">
                            <a href="{{ route('user.role.create') }}" class="btn btn-success">Create</a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($roles->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="text-right" width="6em">&nbsp;</th>
                                <th>Title</th>
                                <th class="text-right" width="5em">Users</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-user-astronaut"></i>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('user.role.show', $role) }}">{{ $role->name }}</a>
                                    </td>
                                    <td class="align-middle text-right">{{ $role->users->count() }}</td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('user.role.edit', $role) }}">Edit</a> |
                                        <a href="{{ route('user.role.delete', $role) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card-body text-center py-5">
                            <p>You haven't created any roles yet!</p>
                            <a href="{{ route('user.role.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
