<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
       $product =Product::orderBy("products.id",'desc')->take(5)->get(); 
        return view("products",['product'=>$product]);
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

    
}
