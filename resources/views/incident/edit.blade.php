@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header clearfix">
                        <div class="float-left">
                            <div class="mt-2 h4">Edit Incident</div>
                        </div>
                        <div class="float-right">
                            @if($incident->isOpen())
                                <div class="py-2 font-weight-bold text-danger">Unresolved</div>
                            @else
                                <div class="py-2 font-weight-bold text-success">Resolved</div>
                            @endif
                        </div>
                    </div>
                    <form id="edit-form" action="{{ route('incident.update', $incident) }}" method="post">
                        <div class="card-body">
                            @method('put')
                            @include('incident.form')
                            <input type="hidden" name="close" id="close" value="0">
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            @if($incident->isOpen())
                            <button type="submit" class="btn btn-success" id="btn-close">Save &amp; Close</button>
                            @endif
                            <a href="{{ route('incident.show', $incident) }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@if($incident->isOpen())
    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#btn-close').click(function (e) {
                    e.preventDefault();
                    $('#close').val('1');
                    $('#edit-form').submit();
                })
            })
        </script>
    @endpush
@endif

