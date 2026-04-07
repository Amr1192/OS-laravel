<?php

namespace App\Http\Controllers;

use App\Http\Requests\login;
use App\Http\Requests\register;
use App\Http\Resources\OpenSource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index() {

    $user = User::all();
        return OpenSource::collection($user);       //collection for many objects or resources
        
           //       return new OpenSource(User::find(1));    //one resource
    }

    public function register(register $request) {
        $validated = $request->validated();
       $user = User::create($validated);
        $token = $user->createToken('token');
        return [
            'mesaage' => 'successfully registerd',
            'user' => $user ,
            'token' => $token
        ];
    }
    public function login(login $request) {
        $request->validated();
        $user = User::where('email',$request->email)->first();
        if (!$user || !Hash::check($request->password,$user->password)) {
            return 'credentials are wrong';
        }

            // if(!$user || !Hash::check($request->password,$user->password)) {
            //     return 'credentials are wrong';
            // }
            // if(!$user) {
            //     return 'credentials are wrong';
            // }
            $token = $user->createToken('login');
            return [
                'message' => 'user logged in successfully',
                'token' =>$token->plainTextToken
            ];
    }
    public function logout(Request $request) {


        $request->user()->tokens()->delete();
        
        return [
            'message' => 'user logged out successfully'
        ];


        //tokens() delete all token for the user with access token
        //currentAccessToken() delete only the token with this request
        //tokens()->where('id',3)->delete()
    }

    public function os() {
         User::all();
        return response()->json([
            'message' => 'ok'
        ],200)->header('os','value');
    }
}
