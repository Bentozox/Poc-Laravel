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

Route::get('/api/client/find/{name}','ClientController@find');

Route::get('api/client/create/{name}', 'ClientController@create');

Route::get('api/client/fetchAll', 'ClientController@fetchAll');

Route::get('api/client/delete/{name}', 'ClientController@delete');



