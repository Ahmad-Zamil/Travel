<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    Public Function home(){

        return view('frontend.index');
    }

    Public Function packages(){

        return view('frontend.packages');
    }

    Public Function tour_details(){

        return view('frontend.tour_details');
    }

    Public Function booking(){

        return view('frontend.booking');
    }

    Public Function contact(){

        return view('frontend.contact');
    }
}


