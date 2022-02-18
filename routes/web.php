<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitycardController; 
use App\Http\Controllers\BrandController; 

use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UserController; 





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
Route::get('/home', [HomeController::class, 'getHomeOfPerson']);
Route::get('/homes', [HomeController::class, 'getHomeListOfBrokers']);

//csv uploading importing routes
Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');
