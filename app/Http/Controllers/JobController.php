<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //controller to view step 1
    function index(){
        return view('/job/index');
    }
}
