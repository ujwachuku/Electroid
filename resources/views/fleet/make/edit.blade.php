@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Vehicle Make</div>
                    <form action="{{ route('fleet.make.update', $make) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('fleet.make.form')
                        </div>
                        <div class="card-footer text-center">
                            <button make="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('fleet.make.show', $make) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
