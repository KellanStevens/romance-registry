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

Route::view('/', 'welcome')->name('welcome');

// is authenticated and verified then run all views under it
 Route::middleware(['auth', 'verified'])->group(function () {
     Route::view('dashboard', 'dashboard')->name('dashboard');
     Route::view('profile', 'profile')->name('profile');
 });


 require __DIR__.'/auth.php';
