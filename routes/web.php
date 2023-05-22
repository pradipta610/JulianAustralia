<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homepage.index');
});
Route::prefix('gallery')->group(function () {
    Route::get('/couple', function () {
        return view('homepage.gallery.couple');
    })->name('couple');

    Route::get('/family', function () {
        return view('homepage.gallery.family');
    })->name('family');

    Route::get('/portrait', function () {
        return view('homepage.gallery.portrait');
    })->name('portrait');
    
    Route::get('/event', function () {
        return view('homepage.gallery.event');
    })->name('event');
});
Route::get('/about', function () {
    return view('homepage.about');
})->name('about');
