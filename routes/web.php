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

Route::get('/contents', function () {
  $content = DB::table('contents')->get();

  return $content;
});

Route::get('/', 'ContentController@index');
Route::get('/content', 'ContentController@index');
Route::get('/content/{benefit}','ContentController@show');
