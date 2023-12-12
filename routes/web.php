<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'product'] );
Route::post('/product', [ProductController::class,'store'])->name('add.product');
Route::post('/update-product', [ProductController::class,'updateProduct'])->name('update.product');
Route::delete('product/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product-search', [ProductController::class, 'search'])->name('product.search');


Route::get('/image',[ImageController::class,'image']);
Route::post('/store',[ImageController::class,'image_store'])->name('image.store');
Route::get('/multiple-image', [ImageController::class, 'index']);
Route::post('/upload-multiple-image-ajax', [ImageController::class, 'saveUpload'])->name('upload-multiple-image');