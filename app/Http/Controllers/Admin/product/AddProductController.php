<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Addcategory;
use App\Models\admin\Addproduct;
use App\Models\admin\Addsubcatgeory;

class AddProductController extends Controller
{
    function Addproduct(){
        $catdata=Addcategory::all();
        $subcatdata=Addsubcatgeory::all();

        return view("Admin.product.addProduct",['catdata'=>$catdata,'subcatdata'=>$subcatdata]);
    }

    function Addproductdata(Request $request){

        $request->validate([
            'pname'          => 'required'|'unique',
            'cat_id'          => 'required',
            'subcat_id'        => 'required',
            'tags'             => 'required',
            'pimage'           =>'required',
            'ptumbnail'         =>'required',
            'price'             =>'required',
            'exchange'           =>'required',
            'pimage.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        if($request->TotalImages > 0)
        {
               
           for ($x = 0; $x < $request->TotalImages; $x++) 
           {

               if ($request->hasFile('pimage'.$x)) 
                {
                    $file= $request->file('pimage'.$x);

                    $pimage = $file->move('public/Admin/images');
                    $pimage= $file->getClientOriginalName();

                    //$insert[$x]['name'] = $name;
                    $insert[$x]['pimage'] = $pimage;
                }
           }

         $product= new Addproduct();
         $product->pname = $request->pname;
         $product->cat_id = $request->cat_id;
         $product->subcat_id = $request->subcat_id;
         $product->tags = $request->tags;
         $product->pimage = $request->pimage;
         $product->ptumbnail = $request->ptumbnail;
         $product->price = $request->price;
         $product->exchange= $request->exchange;
         $product->save();
         return redirect()->to("admin.AddProduct");
        
    }

q2

    }
}
