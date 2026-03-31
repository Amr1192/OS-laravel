<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $users = User::all();       //select * from users;

        return view('welcome',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('create');

        //insert into users values 
        // User::create([
        //     'name' => 'mohamed',
        //     'email' => 'mohamed@gmail.com',
        //     'password'=> '12345678'
        // ]);

        // User::where('id',1)->update([
        //     'name'=>'yousef',
        //     'email'=>'yousef@gmail.com',
        //     'password'=>'12345678'
        // ]);

        // User::where('id',1)->delete();

        // User::destroy(2);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
