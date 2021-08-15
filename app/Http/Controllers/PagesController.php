<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('welcome');
    }
     function mission(){
        return view('mission');
    }
     function history(){
        return view('history');
    }
     function about(){
        return view('about');
    }
     function contact(){
        return view('contact');
    }
}
