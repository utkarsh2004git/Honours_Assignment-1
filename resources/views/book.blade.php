@include('layouts.header')
@push('title')
<title>Book</title>
<style>
        #book{
        color: rgb(108, 187, 255);
    }
    #book::after {
        content: '';
        height: 3px;
        background-color: white;
        display: block;
        position: absolute;
        left: 0;
        width: 100%;
        opacity: 1;
    }
</style>
<h1>This is Book</h1>
@include('layouts.footer')