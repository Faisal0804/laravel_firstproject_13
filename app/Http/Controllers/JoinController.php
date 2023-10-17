<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JoinController extends Controller
{
   function marge(){
      $post=DB::table("post")->get();
      $users=DB::table("users")->get();
      $totalData=$post->merge($users);
      return $totalData;

   }
   function leftJoin(){
    $result= DB::table("post")
     ->leftJoin('users','post.users_id','=','users.id')
     ->get();
     return $result;

   }

   function singleInsert(){
     $insert=DB::table('post')->insert(
        [
            ['title'=>'illigal','description'=>'he is a culprit'],
            ['title'=>'illigal ac','description'=>'he is a culprit'],
      ]
        
    );
    if($insert==true){
        return 'data insert success';
    }else{
        return 'data not insert success';
    }
   }

   function delete(){
     $delete=DB::table('post')->truncate();
     if($delete==true){
        return "delete success";
     }else{
        return "delete not success";
     }
   }

   function Update(){

    $result= DB::table('post')
         ->where('title','=','illigal')
         ->update(['title'=>'ligal','description'=>'hommdkjchdufh hsdgyie']);

    if($result==true){
        return "Data Update Success";
    }
    else{
        return "Data Update fail";
    }

 }
}
