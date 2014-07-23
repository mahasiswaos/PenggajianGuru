<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Route::get('/', 'App\\Controllers\\BootstrapController@home');
//Route::get('/show', 'App\\Controllers\\HomeController@showWelcome');
//Route::get('/', 'App\\Controllers\\TestController@index');

$NS = 'App\\Controllers\\';

Route::get('/',$NS.'HomeController@index');
Route::get('/dataguru',$NS . 'DataguruController@view');
Route::get('/dataguru/add',$NS . 'DataguruController@add');
Route::post('/dataguru/add/proses',$NS . 'DataguruController@addProses');
Route::get('/dataguru/edit/{id}',$NS . 'DataguruController@edit');
Route::post('/dataguru/edit/proses',$NS . 'DataguruController@editProses');
Route::get('/dataguru/delete/{id}',$NS . 'DataguruController@delete');

Route::get('/datakerja',$NS . 'DatakerjaController@view');
Route::get('/datakerja/add',$NS . 'DatakerjaController@add');
Route::post('/datakerja/add/proses',$NS . 'DatakerjaController@addProses');
Route::get('/datakerja/edit/{id}',$NS . 'DatakerjaController@edit');
Route::post('/datakerja/edit/proses',$NS . 'DatakerjaController@editProses');
Route::get('/datakerja/delete/{id}',$NS . 'DatakerjaController@delete');


Route::get('/penerimaangaji',$NS . 'PenerimaangajiController@view');
Route::get('/penerimaangaji/add',$NS . 'PenerimaangajiController@add');
Route::post('/penerimaangaji/add/proses',$NS . 'PenerimaangajiController@addProses');
Route::get('/penerimaangaji/edit/{id}',$NS . 'PenerimaangajiController@edit');
Route::post('/penerimaangaji/edit/proses',$NS . 'PenerimaangajiController@editProses');
Route::get('/penerimaangaji/delete/{id}',$NS . 'PenerimaangajiController@delete');







