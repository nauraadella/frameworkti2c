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

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('order', function () {
    return view('order');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('login', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
