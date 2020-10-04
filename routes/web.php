<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/books/{title}', function () {
    return view('books_detail');
})->name('books_detail');

