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

Route::view('/', 'welcome');


// is authenticated and verified then run all views under it
 Route::middleware(['auth', 'verified'])->group(function () {
     Route::view('dashboard', 'dashboard')->name('dashboard');
     Route::view('dates', 'dates')->name('dates');
     Route::view('profile', 'profile')->name('profile');
 });

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
//
//Route::view('dates', 'dates')
//    ->middleware(['auth', 'verified'])
//    ->name('dates');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

require __DIR__.'/auth.php';
