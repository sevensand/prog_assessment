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


// Route::get('/', ['as' => 'apiget', 'uses' => 'gitcontroller@getApiData']);

Route::group(array('prefix' => '/'), function(){
  Route::resource('/', 'gitcontroller');
Route::get('/items{user_id}', ['as' => 'Repository', 'uses' => 'gitcontroller@show']);
});
