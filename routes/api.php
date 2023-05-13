<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//public Route
Route::get('/students',[StudentController::class,'index']);
Route::get('/students/{id}',[StudentController::class,'show']);
Route::post('/students/store',[StudentController::class,'store']);
Route::put('/students/update/{id}',[StudentController::class,'update']);
Route::delete('/students/delete/{id}',[StudentController::class,'destroy']);
Route::get('/students/search/{city}',[StudentController::class,'search']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });