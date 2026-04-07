<?php

namespace App\Http\Controllers;

use App\Http\Requests\login;
use App\Http\Requests\register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Authcontroller extends Controller
{
   public function showRegister() {
    return view('register');
   }
   public function showLogin() {
    return view('login');
   }
   public function register(register $request) {
    //validates input from user
    
    $validated = $request->validated();
    //insert into users table
   $user =  User::create($validated);
    //login
    Auth::login($user);
    return redirect()->route('products.index');

   }
   public function login(login $request) {
$validated = $request->validated();
      if(Auth::attempt($validated)) {
        $request->session()->regenerate();
        return redirect()->route('products.index');
      }

      throw ValidationException::withMessages(
        [
            'credentails' => 'your credentails is incorrect'
    
        ]
      );


   }
   public function logout(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    return redirect()->route('products.index');
   }
}
