<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\cartChecking;
use App\Http\Controllers\Auth\Home;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/' ,[Home::class , 'Loadproducts'] );
Route::get('/home' ,[Home::class , 'Loadproducts'] );
Route::view('/register', 'register')->name('register');
Route::post('/store', [RegisterController::class, 'store'])->name('store');
Route::post('/authenticate', [LoginController::class, 'login'])->name('authenticate');
Route::view('/login', 'login')->name('login');
Route::get('/cart' , [cartChecking::class , 'check'])->name('authenticateCart');
Route::view('/cartEmpty', 'cartEmpty');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/addtocart/{id}' , [cartChecking::class , 'addCart']);