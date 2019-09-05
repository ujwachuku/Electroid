@extends('report.portrait')
@section('content')
    @foreach($incidents as $incident)
        <div>
            <h4>{{ $incident->code }}</h4>
            <p>{{ $incident->reported_at }}</p>
        </div>
    @endforeach
@endsection
