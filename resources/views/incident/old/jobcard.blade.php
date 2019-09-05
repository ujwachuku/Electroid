<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Job Card</title>
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
            height: 330px;
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
        <h1 class="text-center">Job Card</h1>
        <hr/>
        <div>
            <table style="width: 100%">
                <tr>
                    <td class="heading text-right">Reported At:</td>
                    <td class="text-left">{{$incident->reported_at}}</td>
                    <td class="heading text-right">&nbsp;</td>
                    <td class="text-left">&nbsp;</td>
                    <td class="heading text-right">Reported By:</td>
                    <td class="text-left">{{$incident->user->name}}</td>
                </tr>
                <tr>
                    <td class="heading text-right">Job Card:</td>
                    <td class="text-left">{{$incident->ref_nr}}</td>
                    <td class="heading text-right">Fleet Nr:</td>
                    <td class="text-left">{{$incident->fleet->fleet_nr}}</td>
                    <td class="heading text-right">Team:</td>
                    <td class="text-left">{{$incident->team_id <> '' ? $incident->team_id : 'Unknown' }}</td>
                </tr>
                <tr>
                    <td class="heading text-right">Reg Nr:</td>
                    <td class="text-left">{{$incident->fleet->reg_nr}}</td>
                    <td class="heading text-right">Model:</td>
                    <td class="text-left">{{$incident->fleet->model_id}}</td>
                    <td class="heading text-right">Chassis Nr:</td>
                    <td class="text-left">{{$incident->fleet->chassis_nr}}</td>
                </tr>
                <tr>
                    <td class="heading text-right">Type:</td>
                    <td class="text-left">{{$incident->type->name}}</td>
                    <td class="heading text-right">Area:</td>
                    <td>{{$incident->area->name}}</td>
                    <td class="heading text-right">Road:</td>
                    <td>{{$incident->area_road <> '' ? $incident->area_road : 'Unknown' }}</td>
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
                <tr><td colspan="6">&nbsp;</td></tr>
                <tr>
                    <td colspan="6" class="heading text-left">Action Performed:</td>
                </tr>
                <tr>
                    <td colspan="6" class="text-left">
                        <div class="description border">{!! htmlspecialchars_decode($incident->action_performed) !!}</div>
                    </td>
                </tr>
            </table>
        </div>
        <hr />
        <p class="text-right">Report Date: {!! date('Y-m-d H:i:s') !!}</p>
        <div class="page-break"></div>
    @endforeach
@endif
</body>
</html>