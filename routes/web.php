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

Route::get('/', "VignetteController@index");
Route::get('/show', function () {
    return view('show');
});

Route::group(['prefix'=>'admin'],function () {
    Route::get('/', "VignetteController@adminIndex")->middleware('admin');

    Route::get('/vignettes', "VignetteController@adminVignettes")->middleware('admin');


    Route::get('/vignettes/create', "VignetteController@create")->middleware('admin');
    Route::post('/vignettes/create', "VignetteController@store")->middleware('admin');

    Route::get('/vignettes/{id}/edit', "VignetteController@edit")->middleware('admin');
    Route::post('/vignettes/{id}/edit', "VignetteController@update")->middleware('admin');

    Route::get('/vignettes/{id}/delete', "VignetteController@destroy")->middleware('admin');

    Route::get('/vignettes/{id}', "VignetteController@read")->middleware('admin');

    // Route::get('', "")->middleware('admin');
    // Route::post('', "")->middleware('admin');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
