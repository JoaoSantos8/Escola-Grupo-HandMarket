<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtesaoController;
use App\Http\Controllers\FeiraController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProdutoController;

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

Route::get('/noticias', [PageController::class,'noticia'])->name('noticia');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/feiras', [FeiraController::class, 'index'])->name('feiras');


Route::post('/feira', [FeiraController::class, 'store'])->name('feira');

Route::resource('admin/users', UserController::class, ['as' => 'admin']);

Route::resource('admin/artesaos', ArtesaoController::class, ['as' => 'admin']);

Route::resource('admin/feiras', FeiraController::class, ['as' => 'admin']);

Route::resource('admin/noticias', NoticiaController::class, ['as' => 'admin']);

Route::resource('admin/produtos', ProdutoController::class, ['as' => 'admin']);
