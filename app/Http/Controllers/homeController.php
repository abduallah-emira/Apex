<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function services(){
        return view('services.services');
    }
    public function about(){
        return view('aboutUs.about');
    }
    public function appointment(){
        return view('pages.appointment');
    }

    public function features(){
        return view('pages.features');
    }

    public function team(){
        return view('pages.ourTeam');
    }

    public function testimonial(){
        return view('pages.testimonial');
    }




}
