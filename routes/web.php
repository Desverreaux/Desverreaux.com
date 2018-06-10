<?php

#require

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

Route::get('/', 'PageController@index');

Route::get('/phpinfo', 'DebugController@php');


// Routes with the above syntax should eventually be converted to something similar to
// what is commented out below.
//
// Route::get('/', function () {
//     return App:call('PageController@index')
// });

Route::redirect('/debug','/Playground/index', 301);
Route::redirect('/Debug','/Playground/index', 301);

Route::get('/Playground/{experiment?}', function ($experiment = 'index') {
    return view('Pages.Debug', compact('experiment'));
});

