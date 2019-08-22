@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left pt-2">Vehicle Models</div>
                        <div class="float-right">
                            <a href="{{ route('fleet.model.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($models as $model)
                                <li><a href="{{ route('fleet.model.show', $model) }}">{{ $model->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
