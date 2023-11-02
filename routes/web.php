<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\BacicController;
use App\Http\Controllers\DemonContriller;
use App\Http\Controllers\EloquoentController;

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

Route::get('/single',SingleController::class);
Route::resource('basic',BacicController::class);

Route::get('/',[DemonContriller::class,'home']);
Route::get('/Elo',[EloquoentController::class,'onToMany']);
Route::get('/manyElo',[EloquoentController::class,'manyToMany']);
Route::get('/oneThrough',[EloquoentController::class,'oneThrouh']);