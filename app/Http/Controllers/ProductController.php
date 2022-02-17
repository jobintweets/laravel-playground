<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class ProductController extends Controller
{
     public function index()
{
  $brand = Product::with(['brand'])->get();
   return response()-> json([
            "message"=>"hello",
            "data"=> $brand
        ],200);
  // dd($brand);
}


public function store() {
   $category_id = [1,2,3];
   $brand_id = 1;
   $product = Product::create([
     'title' => 'Shoes Futsal Adidas',
     'price' => '230',
     'brand_id' => $brand_id
   ]);
  $product->categories()->sync($category_id);
}

public function showData() {
   $product = Product::with(['categories'])->get();
  return response()-> json([
            "data"=> $product
        ],200);
}

}
