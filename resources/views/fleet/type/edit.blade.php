@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Edit Vehicle Type</div>
                    </div>
                    <form action="{{ route('fleet.type.update', $type) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('fleet.type.form')
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('fleet.type.show', $type) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
