<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller
{
    public function image(){
         $image=Image::all();
        return view("image.image",["image"=>$image]);
    }


    public function image_store(Request $request){
        if($request->ajax()){
            $request->validate([
                'image'=>'required|mimes:jpg,jpeg,png,gif,svg'
             ]);

             if($image = $request->file('image')){
                $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $image->move('images', $imageName);
             }
             Image::create([
                'image'=>$imageName
             ]);
             return response()->json([
                'status'=>'success'
             ]);

        }
    }
}
