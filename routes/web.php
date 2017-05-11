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
	return view('home.home');
});

Route::get('/home', function () {
	return view('home.home');
});

Route::get('/facility', 'FacilityController@index');

Route::get('/class', 'ClassController@index');

Route::get('/team', 'TeamController@index');

Route::get('/eventandtips', 'EventController@index');

Route::get('/contact', function () {
	return view('contact.contact');
});	

Route::get('/member', function () {
	return view('member.member');
});

Route::post('/subscribe', 'HomeController@subscribe');