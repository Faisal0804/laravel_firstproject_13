<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AggrecateController extends Controller
{
    function countRow(){
        $result=DB::table('post')->count();
        return $result;
    }
    function maxValue(){
        $result=DB::table('post')->max('mark');
        return $result;
    }
    function avgValue(){
        $result=DB::table('post')->sum('mark');
        return $result;
    }
}
