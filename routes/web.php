<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware'=>'auth'],function(){
Route::get('/', function () {
    return view('welcome');
});

Route::get('show','myController@story');
Route::get('add','myController@add');
Route::post('localhost/addStoryAction','myController@store');


});


Auth::routes();

Route::get('/home', 'HomeController@index');
