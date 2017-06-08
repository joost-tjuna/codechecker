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

Route::get('/', 'PageController@index');
Route::post('/', 'CheckController@check');

Route::post('/check', 'CheckController@naw');

Route::get('/location', 'PageController@location');


Route::get('/location/{id}', [
    'uses' =>'TicketController@location_check',
    'as' => 'pages.location']);

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();