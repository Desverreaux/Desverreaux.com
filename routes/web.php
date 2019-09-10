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
Route::redirect('/', '/site', 301);

Route::get('/site', function () {
    return view('pages.site');
})->name('site');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/testing', function () {
    return view('pages.testing');
})->name('testing');

