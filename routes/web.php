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
|FORMAT
|Route::get(
|    'URL{$DATA?}',
|    ['uses' => 'CONTROLLER@METHOD',
|    'as' => 'ROUTE NAME']
);
*/

Route::redirect('/', '/Home', 301);

Route::get(
    '/Home{Passed_Data?}',
    ['uses' => 'PageController@index',
    'as' => 'Home']
);

/*
|--------------------------------------------------------------------------
|Debug & Sandbox Pages
|--------------------------------------------------------------------------
*/

Route::get(
    '/Playground/{Passed_Data?}',       
    ['uses' => 'DebugController@Playground', 
    'as'=>'Debugging']                 
);

Route::get('/phpinfo','DebugController@phpinfo');

Route::get('/view', function () {
    return view('Pages.Viewer');
});
