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


Route::get('/location/{id}', ['uses' =>'TicketController@location_check', 'as' => 'pages.location']);

Route::get('/home', [ 'as' => 'cms.home', 'uses' => 'HomeController@index', 'middleware' => ['auth', 'admin']]);
Route::get('/home/locations', [ 'as' => 'cms.locations', 'uses' => 'HomeController@locations', 'middleware' => ['auth', 'admin']]);

Route::get('/home/locations/{id}', ['uses' =>'HomeController@showUpdate', 'middleware' => ['auth', 'admin']]);
Route::post('/home/locations/{id}', ['uses' => 'HomeController@update', 'middleware' => ['auth', 'admin']]);

Route::get('/home/add', ['uses' => 'HomeController@showAdd', 'middleware' => ['auth', 'admin']]);
Route::post('/home/add', ['uses' => 'HomeController@add', 'middleware' => ['auth', 'admin']]);

Route::get('/home/naw', ['uses' => 'HomeController@showNaw', 'middleware' => ['auth', 'admin']]);
Route::get('/home/excel', ['as' => 'admin.invoices.excel', 'uses' => 'HomeController@excel', 'middleware' => ['auth', 'admin']]);

Route::get('/home/codes', ['uses' => 'HomeController@showCode', 'middleware' => ['auth', 'admin']]);
Route::post('/home/codes', ['uses' => 'HomeController@importExcel', 'middleware' => ['auth', 'admin']]);

Route::get('/home/excel', ['uses' =>'HomeController@excel', 'middleware' => ['auth', 'admin']]);
Route::get('/home/delete/{id}', ['uses' => 'HomeController@delete', 'middleware' => ['auth', 'admin']]);

Auth::routes();