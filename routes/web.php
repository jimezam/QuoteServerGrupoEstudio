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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get(
    '/random',
    [App\Http\Controllers\QuoteController::class, 'randomQuote']
)->name('quotes.random');

Route::middleware(['auth'])
        ->group(function () {
    // User profile
    Route::get(
        '/profile',
        [App\Http\Controllers\ProfileController::class, 'edit']
    )->name('profile.getform');
    Route::post(
        '/profile',
        [App\Http\Controllers\ProfileController::class, 'update']
    )->name('profile.update');
});
