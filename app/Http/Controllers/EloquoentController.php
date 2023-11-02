<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Machanic;

class EloquoentController extends Controller
{
    public function onToMany(){
          //$post=Post::find(1);
          //$post=Post::find(1)->comments;
          //$post=Comment::find(1);
          //$post=Comment::find(1)->post;
          //return $post;
          $post=Post::with("comments")->get();

         return view('onetomany',['post'=> $post]);
        // $comment=Comment::all();

         //return view('onetomany',['comment'=> $comment]);


    }

    public function manyToMany(){
       // $post=Post::with("categories")->get();
        //return $post;

        //$post=Category::with("posts")->get();
       // return $post;

  }

  public function oneThrouh(){
    $mac=Machanic::with("CarOwnners")->get();
    return $mac;

   
}

  
}
