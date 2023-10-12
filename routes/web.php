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
    return view('welcome');
});

Route::group(['prefix' => 'news'], static function () {
    Route::get('/', [NewsController::class, 'index'])
        ->name('news');

    Route::get('/{id}/show', [NewsController::class, 'show'])
        ->where('id', '\d+')
        ->name('news.show');
});

Route::group(['prefix' => ''], static function () {
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    Route::get('category/{id}', [CategoryController::class, 'show'])
        ->where('id', '\d+')
        ->name('category.show');
});
