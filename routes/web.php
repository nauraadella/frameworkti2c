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
    return view('landing');
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

Route::get('orderan', function () {
    return view('orderan');
});

Route::get('lihat', function () {
    return view('lihat');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('landing', function () {
    return view('landing');
});

Route::post('/tambah-menu', [App\Http\Controllers\MenuController::class,'store'])->name('menu.store');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'datamenu'])->name('datamenu');
Route::post('/tambah-order', [App\Http\Controllers\OrderController::class,'store1'])->name('order.store1');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'dataorder'])->name('dataorder');


Route::get('login', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');

