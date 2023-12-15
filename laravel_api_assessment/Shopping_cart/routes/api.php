<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//signup
Route::post('register', [App\Http\Controllers\auth\AuthController::class, 'index']);
Route::post('login', [App\Http\Controllers\auth\AuthController::class, 'create']);

Route::prefix("admin")->group(function(){
Route::post('/product', [App\Http\Controllers\ProductController::class, 'store']);
Route::post('/uploadimage', [App\Http\Controllers\ProductController::class, 'uploadimage']);
Route::get('/viewall', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/editproduct', [App\Http\Controllers\ProductController::class, 'show']);

});