<?php

namespace App\Models\admin;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class,'categories_id');
    }
}
