<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\MemberController;


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

// -------------------------------------------------------------------------

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [SchoolController::class, 'index'])->name('home');
Route::get('/create', [SchoolController::class, 'show'])->name('create');

Route::post('/create', [MemberController::class, 'store'])->name('store.member');
Route::get('/home/{school_id}', [MemberController::class, 'showMembersBySchool'])->name('home.school');





