<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <style>
        .bg-imperial-primer {
            background-color: #222f3e;
        }

        .bg-armour {
            background-color: #ee5253;
        }

        .bg-light-blue-ballerina {
            background-color: #c8d6e5;
        }

        .bg-fuel-town {
            background-color: #576574;
        }

        aside .list-group-item-action {
            background-color: #222f3e;
            color: #dfdfdf;
        }

        aside .list-group-item-action:hover {
            background-color: #ee5253;
            color: #ffffff;
        }

        .pointer {
            cursor: pointer;
        }

        .card-body>table thead th {
            border-top: none;
        }

        .card-body>table tbody td {
            border-top: 1px solid #ededed;
        }

        .datepicker table td, .datepicker table th {
            border-top: none;
        }
    </style>
</head>
<body>
@include('layouts.navbar')
<div class="d-flex" id="app">
    @include('layouts.aside')
    <main class="flex-grow-1 vh-100" style="overflow: auto">
        <div class="container" style="padding-top: 65px">
            @yield('content')
            <div class="toast">
                <div class="toast-header">
                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>
    </main>
</div>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#logout-button').click(function (e) {
            e.preventDefault();
            $('#logout-form').submit();
        });

        $('.toast').toast();

        $('.tempus-dominus-datetimepicker').datetimepicker({
            //format: 'YYYY/MM/DD',
        });

        $('.tempus-dominus-datepicker').datetimepicker({
            format: 'YYYY/MM/DD',
        });

        $('.form-control-chosen').chosen();
    })
</script>
@stack('scripts')
</body>
</html>
