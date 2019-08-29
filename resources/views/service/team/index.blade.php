@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Service Teams</div>
                    @if($teams->count() > 0)
                        <div class="float-right">
                            <a href="{{ route('service.team.create') }}" class="btn btn-success">Create</a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($teams->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="text-right" width="6em">&nbsp;</th>
                                <th>Title</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-users"></i>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('service.team.show', $team) }}">{{ $team->name }}</a>
                                    </td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('service.team.edit', $team) }}">Edit</a> |
                                        <a href="{{ route('service.team.delete', $team) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card-body text-center py-5">
                            <p>You haven't created any vehicle teams yet!</p>
                            <a href="{{ route('service.team.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
