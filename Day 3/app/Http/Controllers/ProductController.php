<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //   $product = Product::find(4);
        //   return $product->category;

        $category = Category::find(3);
          return $category->product;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request);
        $user = $request->validate([
            'name'=>'required|min:6|string|max:20',
            'email'=>'required|unique:users|email|min:10|max:40',
            'password'=>'required|min:8'
        ]);
        User::create($user);
        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('edit',compact('product'));
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
