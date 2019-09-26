@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Vehicle Models</div>
                    @if($models->count() > 0)
                        <div class="float-right">
                            <a href="{{ route('fleet.model.create') }}" class="btn btn-success">Create</a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($models->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="text-right" width="6em">&nbsp;</th>
                                <th>Title</th>
                                <th class="text-center" width="5em">Vehicles</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($models as $model)
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-car"></i>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('fleet.model.show', $model) }}">{{ $model->name }}</a>
                                    </td>
                                    <td class="align-middle text-center">{{ $model->vehicles->count() }}</td>
                                    <td class="align-middle text-right">
                                        <a href="{{ route('fleet.model.edit', $model) }}">Edit</a> |
                                        <a href="{{ route('fleet.model.delete', $model) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="card-body text-center py-5">
                            <p>You haven't created any vehicle models yet!</p>
                            <a href="{{ route('fleet.model.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
