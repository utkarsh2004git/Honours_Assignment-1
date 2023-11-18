<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/forNav.css')}}">
    @vite('resources/css/app.css')
    @vite('resources/css/forNav.css')
    @stack('title')
</head>
<body>
    <header>
        <nav class="nav-tag">
            <div class="logo-part">
                <a href="https://laravel.com/" target="_blank"><img src='images/logo.png' alt=""></a>
            </div>
            <div class="head-items">
                <ul>
                    <li><a id="home" href="/" >Home</a></li>
                    <li><a id="about" href="/about">About</a></li>
                    <li><a id="history" href="/history">History</a></li>
                    <li><a id="book" href="/book">Book</a></li>
                    <li><a id="contact" href="/contact">Contact </a></li>
                </ul>
            </div>
        </nav>
        <div class="line"></div>
    </header>