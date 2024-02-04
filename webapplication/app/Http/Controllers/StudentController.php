<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    Public function home(){

        return view("welcome");
    }

    Public function form(){

        return view("form");
    }
    Public function about(){

        return view("about");
    }

    Public function contact(){

        return view("contact");
    }

    Public function menu(){

        return view("menu");
    }
    Public function booking(){

        return view("booking");
    }
    Public function service(){

        return view("service");
    }
    Public function team(){

        return view("team");
    }
    Public function testimonial(){

        return view("testimonial");
    }


}




