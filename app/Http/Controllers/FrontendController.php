<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('pages.frontend.home');
    }

    public function about(){
        return view('pages.frontend.about');
    }

    public function service(){
        return view('pages.frontend.service');
    }

    public function portfolio(){
        return view('pages.frontend.portfolio');
    }

    public function contact(){
        return view('pages.frontend.contact');
    }

    public function blog(){
        return view('pages.frontend.blog');
    }
}
