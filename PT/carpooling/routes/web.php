<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//frontend
// Route::post('/signup', [App\Http\Controllers\BaseController::class, 'store']);
// Route::view('/','frontend.homepage');
// Route::view('/login','frontend.login');
// Route::view('/signup','frontend.signup');
Route::get('/', [App\Http\Controllers\frontend\UserController::class, 'index']);
Route::get('/login', [App\Http\Controllers\frontend\UserController::class, 'login']);
Route::post('/custom-login', [App\Http\Controllers\frontend\UserController::class, 'customauthlogin']); 
Route::get('/signup', [App\Http\Controllers\frontend\UserController::class, 'signup']);
Route::post('/register', [App\Http\Controllers\frontend\UserController::class, 'store']);
// Route::view('/dashboard','frontend.dashboard.homepage' );

