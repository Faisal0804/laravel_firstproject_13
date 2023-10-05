<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(){
        return view("user.index");
    }

    function menu(){
        return view("user.menus");
    }

    function blog(){
        return view("user.blogs");
    }
    function contact(){
        return view("user.contact");
    }

    function review(){
        return view("user.reviews");
    }
    function about(){
        return view("user.about");
    }
}
