<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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

Route::view('register','auth.register');
Route::post('store',[RegisterController::class,'store']);
Route::view('home','home');
Route::view('login','auth.login');
Route::post('authenticate',[LoginController::class,'authenticate']);

Route::view('menu','auth.menu');
Route::get('menu',[RegisterController::class,'show']);
/* Route::view('view','auth.view'); */
Route::get('view/{id}',[RegisterController::class,'views']);
Route::get('edit/{id}',[RegisterController::class,'showData'])->name('edit');
Route::post('update',[RegisterController::class,'Update']);
Route::view('homepage1','new.homepage1');


// Route::get('view/{id}',[RegisterController::class,'views']);
