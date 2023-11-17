<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/forNav.css')}}">
    <script src="{{asset('script/forNav.js')}}"></script>
    @stack('title')
</head>
<body>
    <header>
        <nav class="nav-tag">
            <div class="logo-part">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
            <div class="head-items">
                <ul>
                    <li><a href="/" >Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/history">History</a></li>
                    <li><a href="/book">Book</a></li>
                    <li><a href="/contact">Contact </a></li>
                </ul>
            </div>
        </nav>
    </header>
<h1>This is Welcome</h1>
