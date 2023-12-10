<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FeirasController;

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

Route::get('/', [PageController::class,'index'])->name('index');

Route::get('/patrocinadores', [PageController::class,'patrocinadores'])->name('patrocinadores');

Route::get('/signup', [PageController::class,'signup'])->name('signup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/feiras', [FeirasController::class, 'index'])->name('feiras');


Route::post('/feira', [FeirasController::class, 'store'])->name('novaFeira');

