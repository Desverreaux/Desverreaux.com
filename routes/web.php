<?php

#require
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

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
    '/Home',
    ['uses' => 'PageController@index',
    'as' => 'Home']
);

Route::get(
    '/Blog',
    ['uses' => 'PageController@blog',
    'as' => 'Blog']
);

Route::resource('/asset/{$Alias}','AssetController');

/*
|--------------------------------------------------------------------------
|Debug & Sandbox Pages
|--------------------------------------------------------------------------
*/

Route::get(
    '/Playground',       
    ['uses' => 'DebugController@Playground', 
    'as'=>'Debugging']                 
);

Route::get(
    '/Playground/{view}',       
    ['uses' => 'DebugController@Playground_Subdir', 
    'as'=>'Experiment']                 
);

Route::get('/phpinfo','DebugController@phpinfo');

Route::get('/view', function () {
    return view('Pages.Viewer');
});

