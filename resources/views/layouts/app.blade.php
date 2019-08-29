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
    </style>
</head>
<body>
@include('layouts.navbar')
<div class="d-flex" id="app">
    @include('layouts.aside')
    <main class="flex-grow-1 vh-100" style="overflow: auto">
        <div class="container" style="padding-top: 65px">
            @yield('content')
        </div>
    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#logout-button').click(function (e) {
            e.preventDefault();
            $('#logout-form').submit();
        })
    })
</script>
</body>
</html>
