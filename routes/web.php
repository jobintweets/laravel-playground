<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitycardController; 
use App\Http\Controllers\BrandController; 

use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CategoryController; 



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/identity',[IdentitycardController::class,'test']);

Route::get('/brand',[BrandController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
Route::get('/product/store',[ProductController::class,'store']);
Route::get('/product/show-data',[ProductController::class,'showData']);
Route::get('/category/show-data',[CategoryController::class,'showData']);