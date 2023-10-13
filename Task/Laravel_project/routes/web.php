<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/addproduct', [App\Http\Controllers\ProductsController::class, 'create']);
Route::any('/saveproduct', [App\Http\Controllers\ProductsController::class, 'store']);
Route::any('/editproduct/{id}', [App\Http\Controllers\ProductsController::class, 'edit']);
Route::any('/updateproduct/{id}', [App\Http\Controllers\ProductsController::class, 'update']);
Route::any('/deleteproduct/{id}', [App\Http\Controllers\ProductsController::class, 'destroy']);
// Route::view('/product',"viewall ");