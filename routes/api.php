<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return response()->json([
        'message' => 'hello Api'
    ], 200);
});


Route::get('/login', [AuthenticationController::class, 'login']);


Route::get('/test_mongodb', function (Request $request) {
    $connection = DB::connection('mongodb');
    $msg = 'MongoDB is accessible!';

    try {
        $connection->command(['ping' => 1]);
    } catch (\Exception $e) {
        $msg = 'MongoDB is not accessible. Error: ' . $e->getMessage();
    }

    return $msg;
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
