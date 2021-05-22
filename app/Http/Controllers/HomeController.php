<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function oke(){
        return view("home");
    }

    public function page2(){
        return view("page2");
    }
}
