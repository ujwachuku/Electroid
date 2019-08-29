@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Edit Service Team</div>
                    </div>
                    <form action="{{ route('service.team.update', $team) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('service.team.form')
                        </div>
                        <div class="card-footer text-center">
                            <button team="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('service.team.show', $team) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
