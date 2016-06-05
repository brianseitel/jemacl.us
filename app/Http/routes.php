<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'PasteController@index')->name('index');
Route::post('/new', 'PasteController@create')->name('new');
Route::get('/{paste}', 'PasteController@show')->name('show');
Route::get('/{paste}/fork', 'PasteController@fork')->name('fork');
