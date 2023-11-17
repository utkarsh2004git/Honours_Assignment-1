@include('layouts.header')
@push('title')
<title>History</title>
<style>
    #history::after {
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
<h1>This is History</h1>
@include('layouts.footer')