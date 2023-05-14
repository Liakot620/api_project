<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/students',function(){
//     return 'web all requent';
// });

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[StudentController::class,'view']);