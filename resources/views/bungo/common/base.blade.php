<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('bungo.common.head')
    @yield('head')
</head>

    <body>
    @yield('content')
    </body>
</html>
