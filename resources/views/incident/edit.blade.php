@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Edit Incident</div>
                    </div>
                    <form action="{{ route('incident.update', $incident) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('incident.form')
                        </div>
                        <div class="card-footer text-center">
                            <button incident="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('incident.show', $incident) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
