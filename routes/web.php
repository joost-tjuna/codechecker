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

Route::get('/home', [ 'as' => 'cms.home', 'uses' => 'HomeController@index'])->name('home');
Route::get('/home/locations', [ 'as' => 'cms.locations', 'uses' => 'HomeController@locations']);

Route::get('/home/locations/{id}', 'HomeController@showUpdate');
Route::post('/home/locations/{id}', 'HomeController@update');

Route::get('/home/add', 'HomeController@showAdd');
Route::post('/home/add', 'HomeController@add');

Route::get('/home/delete/{id}', 'HomeController@delete');
//Route::get('/admin', ['as' =>'pages.cms', 'uses' => 'cmsController@index', 'middleware' => ['auth', 'admin']]);
Auth::routes();