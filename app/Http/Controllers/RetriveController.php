<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class RetriveController extends Controller
{
    function showAllData(){
        $result=DB::table('post')->get();

        return json_encode( $result);

    }


    function selectOneRows(){
        $result= DB::table('post')->where('title','=','bd cricket')->first();
        return  json_encode( $result);
    }
    function findRows(){
        $result= DB::table('post')->find(3);
        return  json_encode( $result);
    }
    function selectOneColumn(){
        $result= DB::table('post')->pluck('title');
        return  json_encode( $result);
    }
    function specificData(){
        $result= DB::table('post')->where('id','=','3')->value('title');
        return  json_encode( $result);
    }
}
