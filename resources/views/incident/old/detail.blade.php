<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Incidents and Accidents Detail Report</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
        }

        table, th, td {
            border: 0px solid black;
            margin: 0px;
            padding: 2px;
        }

        .heading {
            font-weight: bold;
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

        .description {
            height: 730px;
        }

        .page-break {
            page-break-after: always;
        }

        .border {
            border: solid 1px #000000;
            padding: 5px;
        }
    </style>
</head>
<body>
@if(isset($incidents))
    @foreach($incidents as $incident)
        <h1>Detailed Incidents &amp; Accidents Report</h1>
        <hr/>
        <div>
            <table style="width: 100%">
                <tr>
                    <td class="heading text-right">Ref Nr:</td>
                    <td class="text-left">{{$incident->ref_nr}}</td>
                    <td class="heading text-right">Fleet Nr:</td>
                    <td class="text-left">{{$incident->fleet->fleet_nr}}</td>
                    <td class="heading text-right">Driven By:</td>
                    <td class="text-left">{{$incident->driven_by}}</td>
                </tr>
                <tr>
                    <td class="heading text-right">Reported At:</td>
                    <td class="text-left">{{$incident->reported_at}}</td>
                    <td class="heading text-right">Attended At:</td>
                    <td class="text-left">{{$incident->attended_at}}</td>
                    <td class="heading text-right">Action At:</td>
                    <td class="text-left">{{$incident->action_at}}</td>
                </tr>
                <tr>
                    <td class="heading text-right">Created By:</td>
                    <td class="text-left">{{$incident->user->name}}</td>
                    <td class="heading text-right">Attended By:</td>
                    <td class="text-left">{{$incident->attended_by}}</td>
                    <td class="heading text-right">Action By:</td>
                    <td class="text-left">{{$incident->action_by}}</td>
                </tr>
                <tr>
                    <td class="heading text-right">Type:</td>
                    <td class="text-left">{{$incident->type->name}}</td>
                    <td class="heading text-right">Area:</td>
                    <td>{!! ($incident->pass_impact == 1) ? 'Depot' : 'Road' !!}</td>
                    <td class="heading text-right">Area:</td>
                    <td>{!! ($incident->pass_impact == 1) ? 'Yes' : 'No' !!}</td>
                </tr>
                <tr><td colspan="6">&nbsp;</td></tr>
                <tr>
                    <td colspan="6" class="heading text-left">Description:</td>
                </tr>
                <tr>
                    <td colspan="6" class="text-left">
                        <div class="description border">{!! htmlspecialchars_decode($incident->description) !!}</div>
                    </td>
                </tr>
            </table>
        </div>

        <hr class="page-break"/>
    @endforeach
@endif
</body>
</html>