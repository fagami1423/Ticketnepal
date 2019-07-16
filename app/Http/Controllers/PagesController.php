<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','about','services','contact','reservation']);
    }

  
    public function index(){
        return view('frontend.pages.index');
    }
    
    public function about(){
        return view('frontend.pages.about');
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function reservation(){
        return view('frontend.pages.reservation');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}
