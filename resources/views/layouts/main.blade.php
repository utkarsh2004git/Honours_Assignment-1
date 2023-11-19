<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/forNav.css')}}">
    @stack('title')
</head>
<body>

@include('layouts.header')

@yield('main-section')

@include('layouts.footer')
</body>
</html>