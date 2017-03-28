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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/events','EventsController@index');

Route::get('/events/{event}','EventsController@show');

Route::get('/delete/{event}','EventsController@destroy');

Route::post('/events','EventsController@store');


Route::get('/get/events','CalendarsController@getEvents');

Route::get('/get/events/{day}','CalendarsController@getDay');

Route::get('/get/holidays','CalendarsController@getHolidays');
