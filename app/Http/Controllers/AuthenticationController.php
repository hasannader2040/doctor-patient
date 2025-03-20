<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses; // Corrected case
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Ensure the base Controller is used

class AuthenticationController extends Controller
{
  //  use ApiResponses; // Ensure the trait is used correctly

    public function login(Request $request) // Accept the Request object
    {
        return response()->json(["message" => "thhhe best"], 200);

       // return $this->ok($request->get('email')); // Corrected usage
    }
}

