<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>ETM Defect Summary Report</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        table, th, td {
            border: 0.5px solid black;
            margin: 0px;
            padding: 5px;
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
<h1>ETM Defect Summary Report</h1>
<p>Period: {{$period}}</p>
<hr/>
@if(isset($incidents))
    <table align="center" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Date</th>
            <th>Ref</th>
            <th>Fleet Number</th>
            <th>Area</th>
            <th>Road</th>
            <th>Description</th>
            <th>Action By</th>
            <th>Action Taken</th>
            <th>Passenger Impact</th>
            <th>User</th>
        </tr>
        </thead>
        <tbody>
        @foreach($incidents as $incident)
            <tr>
                <td>{{$incident->reported_at}}</td>
                <td>{{$incident->ref_nr}}</td>
                <td>{{$incident->fleet->fleet_nr}}</td>
                <td>{{$incident->area->name}}</td>
                <td>{{$incident->area_road}}</td>
                <td class="text-left">{!! strip_tags(htmlspecialchars_decode($incident->description)) !!}</td>
                <td>{{ $incident->action_by }}</td>
                <td class="text-left">{!! strip_tags(htmlspecialchars_decode($incident->action_performed)) !!}</td>
                <td>{!! ($incident->pass_impact == 1) ? 'Yes' : 'No' !!}</td>
                <td>{{$incident->user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr />
    <p class="text-right">Report Date: {!! date('Y-m-d H:i:s') !!}</p>
@endif
</body>
</html>
