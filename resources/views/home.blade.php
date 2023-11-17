@include('layouts.header')
@push('title')
<title>Home</title>
<style>
    #home::after {
        content: '';
        height: 3px;
        background-color: black;
        display: block;
        position: absolute;
        left: 0;
        width: 100%;
        opacity: 1;
    }
</style>
<h1>This is Home</h1>
@include('layouts.footer')