<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage(){
        return view('index');
    }
    public function getForm(){
        return view('form');
    }
}
