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

Auth::routes();
Route::get('/admin/users', 'UsersController@adminsitrateUsers');
Route::post('/user/editstatus', 'UsersController@editstatus');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/unabled', function () {
	    return view('front.videogrid.unabled');
	});

Route::group(['middleware' => 'type'], function() {
	
	Route::get('/', function () {
	    return view('front.videogrid.index');
	});

});
