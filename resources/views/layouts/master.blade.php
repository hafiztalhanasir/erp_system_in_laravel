<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'ERP')</title>
    @include('layouts.includes.header_scripts')
    @yield('page_styles')
</head>

<body class="top-navigation">
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
        @auth
        @include('layouts.includes.header')
        @endauth
        @yield('content')
        @include('layouts.includes.footer')
    </div>
</div>
@include('layouts.includes.footer_scripts')
@yield('footer_scripts')
</body>

</html>
