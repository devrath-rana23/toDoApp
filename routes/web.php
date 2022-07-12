<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',  'TodoController@index');

Route::get('create',  'TodoController@create');

Route::get('details/{todo}',  'TodoController@details');
Route::get('edit/{todo}',  'TodoController@edit');
Route::post('update/{todo}',  'TodoController@update');

Route::get('delete',  'TodoController@delete');

Route::post('store-data', 'TodoController@store');
Route::get('delete/{todo}', 'TodoController@delete');
