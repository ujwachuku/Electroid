@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Viewing Vehicle Type</div>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-4 text-right">Name:</dt><dd class="col-md-8">{{ $type->name }}</dd>
                            <dt class="col-md-4 text-right">Vehicles:</dt><dd class="col-md-8">{{ $type->vehicles->count() }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('fleet.type.edit', $type) }}" class="btn btn-primary">Edit</a>
                        <form-delete href="{{ route('fleet.type.delete', $type) }}"></form-delete>
                        <a href="{{ route('fleet.type.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
