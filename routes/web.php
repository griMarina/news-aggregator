<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    return view('index');
})->name('home');

Route::name('news.')
    ->prefix('news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])
            ->name('index');
        Route::get('/show/{id}', [NewsController::class, 'show'])
            ->where('id', '\d+')
            ->name('show');
        Route::get('/categories', [CategoryController::class, 'index'])
            ->name('categories');
        Route::get('/category/{slug}', [CategoryController::class, 'show'])
            ->name('category');
    });
