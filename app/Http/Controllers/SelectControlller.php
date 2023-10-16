<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SelectControlller extends Controller
{
    
    function UniqueSelect(){
        $result= DB::table('post')->distinct()->get();
        return  $result;     
     }

     function singleColumnSelect(){
        $result= DB::table('')->select('name')->get();
        return  $result;   

    }
 
}
