<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function SubCategorytlist(){
        $data=SubCategory::with('category')->get();
        return view("Admin.SubCategory.subCategorylist",['data'=>$data]);
    }
}
