@extends('layouts.main')
@push('title')
@section('main-section')
<title>About</title>
@vite('resources/css/forAbout.css')
<div class="content">
    <div class="upperpart ">
        <div class="main-heading flex">
            <div class="leftp">
                <h3 class="">About Dr. B.R. Ambedkar</h3>
            <p class="headp">Welcome to our About page, where we celebrate the life and legacy of one of India's foremost social reformers and architects of its constitutional framework, Dr. Bhimrao Ramji Ambedkar.</p>
            </div>
            <div class="rightp">
                <img src="images/imgForAbout.jpeg" alt="image">
            </div>
        </div>
    </div>
    <div class="data">
        <div class="para1 para">
            <h4>Early Life and Education:</h4>
            <p>Born on April 14, 1891, in Mhow, Dr. B.R. Ambedkar rose above the shackles of social discrimination to become a beacon of hope for millions. His relentless pursuit of knowledge took him to some of the world's most prestigious institutions, including the University of London and the London School of Economics.</p>
        </div>
        <div class="para2 para">
            <h4>The Father of the Indian Constitution:</h4>
            <p>Dr. Ambedkar's indelible mark on India's history is most pronounced in his role as the chairman of the drafting committee of the Constituent Assembly. His visionary leadership and commitment to social justice played a pivotal role in shaping the Constitution of India, making him affectionately known as the "Father of the Indian Constitution."</p>
        </div>
        <div class="para3 para">
            <h4>Social Reformer and Champion of Equality:</h4>
            <p>Beyond his political contributions, Dr. Ambedkar dedicated his life to challenging the oppressive caste system and advocating for the rights of Dalits and marginalized communities. His ideals of social justice and equality continue to inspire movements and initiatives around the globe.</p>
        </div>
        <div class="para4 para">
            <h4>Conversion to Buddhism:</h4>
            <p>In a symbolic move towards personal and collective emancipation, Dr. Ambedkar, along with a multitude of followers, embraced Buddhism in 1956. This transformative event underscored his commitment to breaking free from the chains of caste-based discrimination.</p>
        </div>
        <div class="para5 para">
            <h4>Legacy and Impact:</h4>
            <p>Dr. B.R. Ambedkar's legacy extends far beyond the pages of history. His teachings and principles resonate in ongoing struggles for social and economic justice. This About page is a tribute to the enduring impact of his work, as we strive to carry forward the torch of equality and human rights.</p>
        </div>
    </div>
</div>
@endsection