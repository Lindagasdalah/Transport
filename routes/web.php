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
/*
Route::get('vendor/add', function () {
    return View::make('add');
});*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/map', 'MapController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/map', 'MapController@index')->name('map');


Route::get('test', function(){
    return view('layouts.main');
});

Route::middleware('auth')->group(function (){

    Route::prefix('routes')->group(function (){
        Route::get('/', function(){
            $config = array();
            $config['center'] = 'Tunis,Tunis';
            GMaps::initialize($config);
            $map = GMaps::create_map();
            echo $map['js'];
            echo $map['html'];
        });

        Route::get('/', 'RouteController@index')->name('routes.index');
        Route::get('/create', 'RouteController@create')->name('routes.create');
        Route::post('/store', 'RouteController@store')->name('routes.store');
        Route::get('/{id}/show', 'RouteController@show')->name('routes.show');
        Route::get('/{id}/edit', 'RouteController@edit')->name('routes.edit');
        Route::post('/{id}/update', 'RouteController@update')->name('routes.update');
        Route::get('/{id}/delete', 'RouteController@delete')->name('routes.delete');

    });
    Route::prefix('agences')->group(function (){

        Route::get('/', 'AgenceController@index')->name('agences.index');
        Route::get('/create', 'AgenceController@create')->name('agences.create');
        Route::post('/store', 'AgenceController@store')->name('agences.store');
        Route::get('/{id}/show', 'AgenceController@show')->name('agences.show');
        Route::get('/{id}/edit', 'AgenceController@edit')->name('agences.edit');
        Route::post('/{id}/update', 'AgenceController@update')->name('agences.update');
        Route::get('/{id}/delete', 'AgenceController@delete')->name('agences.delete');

    });
    Route::prefix('users')->group(function (){

        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/store', 'UserController@store')->name('users.store');
        Route::get('/{id}/show', 'UserController@show')->name('users.show');
        Route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
        Route::post('/{id}/update', 'UserController@update')->name('users.update');
        Route::get('/{id}/delete', 'UserController@delete')->name('users.delete');

    });
    Route::prefix('stops')->group(function (){

        Route::get('/', 'StopController@index')->name('stops.index');
        Route::get('/create', 'StopController@create')->name('stops.create');
        Route::post('/store', 'StopController@store')->name('stops.store');
        Route::get('/{id}/show', 'StopController@show')->name('stops.show');
        Route::get('/{id}/edit', 'StopController@edit')->name('stops.edit');
        Route::post('/{id}/update', 'StopController@update')->name('stops.update');
        Route::get('/{id}/delete', 'StopController@delete')->name('stops.delete');

    });
    Route::prefix('stops_time')->group(function (){

        Route::get('/', 'StopController@index')->name('stops_time.index');
        Route::get('/create', 'StopController@create')->name('stops_time.create');
        Route::post('/store', 'StopController@store')->name('stops_time.store');
        Route::get('/{id}/show', 'StopController@show')->name('stops_time.show');
        Route::get('/{id}/edit', 'StopController@edit')->name('stops_time.edit');
        Route::post('/{id}/update', 'StopController@update')->name('stops_time.update');
        Route::get('/{id}/delete', 'StopController@delete')->name('stops_time.delete');

    });


});
