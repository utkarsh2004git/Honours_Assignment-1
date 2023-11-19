@include('layouts.header')
@push('title')
<title>Book</title>
@vite('resources/css/forBook.css')
<div class="content">
    <div class="heading">
        <h3>Books Written By Dr. B.R. Ambedkar</h3>
    </div>

    <div class="BOOKS">
        <div class="book1 book">
            <img src="images/books/one.jpg" alt="img">
            <h4>Annihilation of Caste</h4>
        </div>
        <div class="book2 book">
            <img src="images/books/two.jpg" alt="img">
            <h4>The Problem of the Rupee</h4>
        </div>
        <div class="book3 book">
            <img src="images/books/three.jpg" alt="img">
            <h4>Thoughts on Linguistic States</h4>
        </div>
        <div class="book4 book">
            <img src="images/books/four.jpg" alt="img">
            <h4>The Buddha and His Dhamma</h4>
        </div>
        <div class="book5 book">
            <img src="images/books/five.jpg" alt="img">
            <h4>Waiting for a Visa</h4>
        </div>
        <div class="book6 book">
            <img src="images/books/six.jpg" alt="img">
            <h4>Riddles in Hinduism</h4>
        </div>
    </div>
</div>
@include('layouts.footer')