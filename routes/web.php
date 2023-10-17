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
    return redirect()->route('home');
});

Route::get('/oldadd', function(){
    return view('oldadd');
});

// -------------------------------------------------------------------------

// -------------------------------------------------------------------------

Route::get('/home', function(){
    return view('home', );
})->name('home');

Route::get('/add', function(){
    return view('add', );
})->name('add');










