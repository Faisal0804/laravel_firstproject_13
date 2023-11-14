<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function product(){
      // $product =Product::orderBy("products.id",'desc')->take(5)->get();
         $product=Product::latest()->paginate(5);

        return view("products", ['product'=>$product]);
    }

    public function store(Request $request){

        $request->validate([
            'pname'          => 'required',
            'price'          => 'required',
        ]);

         $product= new Product();
         $product->pname = $request->pname;
         $product->price = $request->price;
         $product->save();

    }

    public function updateProduct(Request $request){

        $request->validate([
            'up_pname'=> 'required',
            'up_price' => 'required',
        ]);

         Product::where('id',$request->up_id)->update([

            'pname'=> $request->up_pname,
            'price' => $request->up_price,
         ]);
        
        

    }

    public function delete($id){
        Product::find($id)->delete();
        return response()->json(['success'=>'prodct Deleted Successfully!']);
    }


 

   

    
}
