<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function services(){
        return view('services');
    }

    public function about(){
        return view('about');
    }

    public function welcome(){
        return view ('welcome');
    }

    public function home(){
        return view ('home');
    }

}
