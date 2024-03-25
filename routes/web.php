<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\BlogController;

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
Route::get('/Apropos', [AproposController::class, 'index'])->name('apropos');
Route::get('/Galerie', [GalerieController::class, 'index'])->name('galerie');
Route::get('/Blog', [BlogController::class, 'index'])->name('blog');
