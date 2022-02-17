<?php

namespace App\Http\Controllers;
use App\Models\Category; 

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showData() {
   $products = Category::with(['products'])->get();
  return response()-> json([
            "data"=> $products
        ],200);
}
}
