<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('styles/common/app.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/common/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/typicons/src/font/typicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('styles/layouts/header.css') }}">

    @yield('head')
</head>
<body>
    <div class="">
        <div class="nav-header">
            @include('layouts.header')
        </div>

        <div class="main row" role="main">
            @yield('content')
        </div>
    </div>
</body>
</html>