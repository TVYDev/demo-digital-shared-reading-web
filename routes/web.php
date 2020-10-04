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
    if(\Illuminate\Support\Facades\Session::get('type-login')) {
        return redirect()->route('menu', ['type' => \Illuminate\Support\Facades\Session::get('type-login')]);
    }
    else {
        return redirect()->route('home');
    }
})->name('home');

Route::get('/home', function () {
    if(\Illuminate\Support\Facades\Session::get('type-login')) {
        return redirect()->route('menu', ['type' => \Illuminate\Support\Facades\Session::get('type-login')]);
    }
    else {
        return view('home');
    }
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    \Illuminate\Support\Facades\Session::forget('type-login');
    return redirect()->route('home');
})->name('logout');

Route::get('/menu/{type}', function ($type) {
    \Illuminate\Support\Facades\Session::put('type-login', $type);
    return view('menu')->with('type', $type);
})->name('menu');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/books/{title}', function () {
    return view('books_detail');
})->name('books_detail');

Route::get('/online-class-form', function () {
    return view('online_class_form');
})->name('online_class_form');

Route::get('/online-class-detail', function () {
    return view('online_class_detail');
})->name('online_class_detail');

Route::get('/teacher-forum', function () {
    return view('teacher_forum');
})->name('teacher_forum');

Route::get('/reading-log', function () {
    return view('reading_log');
})->name('reading_log');

Route::get('/reading-log-form', function () {
    return view('reading_log_form');
})->name('reading_log_form');

Route::get('/students-parents-comments', function () {
    return view('students_parents_comments');
})->name('students_parents_comments');

Route::get('/feedback-comments', function () {
    return view('feedback_comments');
})->name('feedback_comments');
