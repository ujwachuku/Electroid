@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Viewing Vehicle Model</div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-4 text-right">Make:</dt><dd class="col-md-8">{{ $model->make->name }}</dd>
                            <dt class="col-md-4 text-right">Model:</dt><dd class="col-md-8">{{ $model->name }}</dd>
                            <dt class="col-md-4 text-right">Vehicles:</dt><dd class="col-md-8">{{ $model->vehicles->count() }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('fleet.model.edit', $model) }}" class="btn btn-primary">Edit</a>
                        <form-delete href="{{ route('fleet.model.delete', $model) }}"></form-delete>
                        <a href="{{ route('fleet.model.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
