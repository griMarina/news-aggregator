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

Route::get('/welcome', function (): string {
    return 'Hi there! Welcome to my first laravel project';
});

Route::get('/info', static function (): string {
    return 'Here will be soon a news aggregator!';
});

Route::get('/news', static function (): string {
    return 'Page with all the news';
});

Route::get('/news/{id}', static function (int $id): string {
    return "Welcome to page of the news with id {$id}";
});
