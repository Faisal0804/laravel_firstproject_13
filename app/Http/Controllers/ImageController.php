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


    public function index()
    {
        return view('MultiImage.multiImage');
    }

    public function saveUpload(Request $request)
    {
        
        $validatedData = $request->validate([
        'image' => 'required',
        'image.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        if($request->TotalImages > 0)
        {
               
           for ($x = 0; $x < $request->TotalImages; $x++) 
           {

               if ($request->hasFile('image'.$x)) 
                {
                    $file= $request->file('image'.$x);

                    $image = $file->move('public/images');
                    $image= $file->getClientOriginalName();

                    //$insert[$x]['name'] = $name;
                    $insert[$x]['image'] = $image;
                }
           }

           Image::insert($insert);
           return response()->json([
            'status'=>'success'
         ]);

        }
    }






}
