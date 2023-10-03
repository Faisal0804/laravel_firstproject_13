<?php

use App\Http\Controllers\SiteController;
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

Route::get('/',[SiteController::class,"home"] );
Route::get('/menu',[SiteController::class,"menu"] );
Route::get('/blog',[SiteController::class,"blog"] );
Route::get('/review',[SiteController::class,"review"] );
Route::get('/contact',[SiteController::class,"contact"] );