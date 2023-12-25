<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use Illuminate\Http\Request;

class AddcatController extends Controller
{
    function category(){
        return view("Admin.category.addCategory");
    }


    function Addcategory(Request $request){
        $request->validate([
            'catname'          => 'required',
            
        ]);

         $category= new Category();
         $category->catname = $request->catname;
         $category->save();
         return response()->json([
            'status'=>'success'
         ]);

        
        
    }
}
