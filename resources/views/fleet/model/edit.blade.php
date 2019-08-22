@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Vehicle Model</div>
                    <form action="{{ route('fleet.model.update', $model) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('fleet.model.form')
                        </div>
                        <div class="card-footer text-center">
                            <button model="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('fleet.model.show', $model) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
