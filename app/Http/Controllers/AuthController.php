<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses; // Corrected case
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Ensure the base Controller is used

class AuthController extends Controller
{
    use ApiResponses; // Traits should be used inside the class, not inside a method

    public function login()
    {
        return $this->ok(message: 'Hello, login!');
    }
}

