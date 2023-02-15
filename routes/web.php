<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Admin\HomeController as HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('comics')->name('comics.')->group(function(){
    Route::get('/', [ComicController::class, 'index'])->name('index');
    Route::get('/create', [ComicController::class, 'create'])->name('create');
    Route::get('/{comic}', [ComicController::class, 'show'])->name('show');
    Route::post('/', [ComicController::class, 'store'])->name ('store');
    Route::get('/{comic}/edit', [ComicController::class, 'edit'])->name('edit');
    Route::put('/{comic}', [ComicController::class, 'update'])->name('update');
    Route::delete('/{comic}', [ComicController::class, 'destroy'])->name('destroy');
});