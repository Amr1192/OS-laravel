<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index() {
      $products = file_get_contents(database_path('products.json'));
   $products = json_decode($products);
    return view('welcome',['products'=>$products]);
   }

}
