<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if(Gate::allows('admin')) {
        //     abort(403);
        // }
        Product::with('category')->get();
        $products = Product::simplePaginate(6);
          return view('welcome',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           $categories = Category::all(); 
            return view('create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $products = $request->validated();
  
        Product::create($products);
       return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
            // $product = Product::find($id);
        return view('show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
            $product = $request->validated();

        Product::where('id',$id)->update($product);
        return redirect('/products');
            }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


      $product= Product::destroy($id);
      return redirect('/products');
      
    }
}
