<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('index');
});
Route::get('/cp', function () {
    return view('cp.index');
});
Route::get('/category-single', function () {
    return view('category-single');
})->name('category.single');

Route::get('/store-all', function () {
    return view('store-all');
})->name('store.all');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/store-list', function () {
    return view('store-list');
})->name('store.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hash-password/{password}', function(Request $request){
    return Hash::make($request->password);
});
