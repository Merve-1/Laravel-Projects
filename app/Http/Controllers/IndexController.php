<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    function index() {
        return view('index', data:['pageTitle' => 'Home']);
    }

    function about(){
        return view('about', data:['pageTitle' => 'About']);
    }

    function contact(){
        return view('contact',  data:['pageTitle' => 'Contact Us']);
    }
}
