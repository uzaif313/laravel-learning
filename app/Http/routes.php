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

Route::get('/', function () {
    return view('welcome');
});
$route_function = function(){
	return "<h1>India is better home than other country</h1>";
};
Route::get('india/home',$route_function);

Route::get('canada/second_home',function(){
	return "<h2>Like to live  there with family!!</h2>";
});

Route::get('europ/third_home',function(){
	return "<h2>Like to live and work here !!</h2>";
});