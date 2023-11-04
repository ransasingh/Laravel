<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/product', function () {
    return view('viewall');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/product', [App\Http\Controllers\productController::class, 'index']);
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
// Route::view('/dashboard', [App\Http\Controllers::class, 'index']);
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);

Route::any('/deleteproduct/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::any('/addnew',[App\Http\Controllers\ProductController::class,'store']);