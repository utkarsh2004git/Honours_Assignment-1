<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function DisplayHome(){
        return view("home");
    }
    public function DisplayAbout(){
        return view("about");
    }
    public function DisplayBooks(){
        return view("book");
    }
    public function DisplayHistory(){
        return view("history");
    }
    public function DisplayContact(){
        return view("contact");
    }

}

