<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses; // Corrected case
use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Ensure the base Controller is used
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class AuthenticationController extends Controller
{
    // use ApiResponses; // Ensure the trait is used correctly

    //public function login(Request $request) // Accept the Request object
    //{
      //  return response()->json(["message" => "thhhe best"], 200);
    //}

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json(['user' => $user], 201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login details'], 401);
        }
        return response()->json(['message' => 'Login successful']);
    }

    public function user(Request $request)
    {
        return response()->json(Auth::user());
    }
}