<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemonContriller extends Controller
{
   function home(){

    $fruits=array("apple","banana");
    $car=array("audi","corolla");


    return view("home",['fruits'=>$fruits,'car'=>$car]);
      
   }
}
