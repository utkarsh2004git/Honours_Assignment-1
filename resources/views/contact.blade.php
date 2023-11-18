@include('layouts.header')
@push('title')
<title>Contact</title>
<style>
    #contact::after {
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
<h1 class="">This is Contact</h1>
@include('layouts.footer')