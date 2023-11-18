@include('layouts.header')
@push('title')
<title>Contact</title>
<style>
        #contact{
        color: rgb(108, 187, 255);
    }
    #contact::after {
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
<h1 class="">This is Contact</h1>
@include('layouts.footer')