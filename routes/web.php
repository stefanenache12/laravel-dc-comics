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

// Controlers
use App\Http\Controllers\Guest\MainController;
use App\Http\Controllers\Admin\ComicController;

Route::get('/',[MainController::class, 'index'])->name('home');

Route::resource('comics',ComicController::class);