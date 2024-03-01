<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;


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
    return view('home');
});
Route::get('/Apropos', [AproposController::class, 'index'])->name('apropos');
Route::get('/Galerie', [GalerieController::class, 'index'])->name('galerie');
Route::get('/Service', [ServiceController::class, 'index'])->name('service');
Route::get('/Contact', [ContactController::class, 'index'])->name('contact');