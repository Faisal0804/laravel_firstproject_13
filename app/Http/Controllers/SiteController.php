<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(){
        return view("user.home");
    }

    function menu(){
        return view("user.menu");
    }

    function blog(){
        return view("user.blog");
    }
    function contact(){
        return view("user.contact");
    }

    function review(){
        return view("user.review");
    }
}
