@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="mt-2 h4">Viewing Vehicle Make</div>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-md-4 text-right">Name:</dt><dd class="col-md-8">{{ $make->name }}</dd>
                        <dt class="col-md-4 text-right">Vehicles:</dt><dd class="col-md-8">{{ $make->vehicles->count() }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('fleet.make.edit', $make) }}" class="btn btn-primary">Edit</a>
                    <form-delete href="{{ route('fleet.make.delete', $make) }}"></form-delete>
                    <a href="{{ route('fleet.make.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
