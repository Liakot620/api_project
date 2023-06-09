<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;


//public Route

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);

//protected Route
Route::middleware('auth:sanctum')->group(function(){
    Route::get('/students',[StudentController::class,'index']);
    Route::get('/students/{id}',[StudentController::class,'show']);
    Route::post('/students/store',[StudentController::class,'store']);
    Route::put('/students/update/{id}',[StudentController::class,'update']);
    Route::delete('/students/delete/{id}',[StudentController::class,'destroy']);
    Route::get('/students/search/{city}',[StudentController::class,'search']);
    Route::get('/logout',[UserController::class,'logout']);
});