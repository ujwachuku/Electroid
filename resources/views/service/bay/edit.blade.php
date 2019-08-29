@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Edit Service Bay</div>
                    </div>
                    <form action="{{ route('service.bay.update', $bay) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('service.bay.form')
                        </div>
                        <div class="card-footer text-center">
                            <button bay="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('service.bay.show', $bay) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
