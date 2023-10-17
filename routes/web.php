<?php

use App\Http\Controllers\AggrecateController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\SelectControlller;
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

Route::get('/',[RetriveController::class,"specificData"] );

Route::get('/menu',[SiteController::class,"menu"] );
Route::get('/about',[SiteController::class,"about"] );
Route::get('/blog',[SiteController::class,"blog"] );
Route::get('/review',[SiteController::class,"review"] );
Route::get('/contact',[SiteController::class,"contact"] );
Route::get('/aggr',[AggrecateController::class,"avgValue"] );
Route::get('/select',[SelectControlller::class,"UniqueSelect"] );
Route::get('/update',[JoinController::class,"Update"] );