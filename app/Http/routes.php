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

Route::get('/{data?}', function ($params = "Home") {
		$data['params'] =  $params ;
    // return view('welcome');
		// return "<div align='center'><h1>India is better to live</h1></div>";
		 // echo "<pre>";
			
		 return View::make('sample',$data);
});
$route_function = function(){
	return "<h1>India is better home than other country</h1>";
};

Route::get('ttl/res',function(){
	$res = Response::make('This code in cache with 60 second',200);
	$res->setTtl(60);
	return $res;
});

Route::get('india/home',$route_function);

Route::get('canada/second_home',function(){
	// return Redirect::to("india/home");
	return redirect("india/home");
	// return "<h2>Like to live  there with family!!</h2>";
});


Route::get('res/json',function(){
	$data = ['node','express','laravel','rails'];
	return response()->json($data);
});

Route::get('europ/third_home',function(){
	// return "<h2>Like to live and work here !!</h2>";
	// return Response::make("Hi Europe",202);
	$res = Response::make("Come to Europe",200);
	$res->headers->set("developer","uzaif");
	return $res;
});


// Route::get('/technologies',function(){
// 	return "<h1>Technology Index Page</h1>";
// });
// Route::get('/technologies/{stack}',function($tech){
// 	return "Your Selected Tech is <b>{$tech}</b>";
// });
// Route::get('/technologies/nodejs',function(){});
// Route::get('/technologies/laravel',function(){});

Route::get('/technologies/{stack?}',function($stack='Rails'){
	// if ($stack== null) {
	// 		return "Its technologies Index Page";

	// }
			return "Its {$stack} technologies boom!!";

});




Route::get('/blade/magic',function(){
	$data['test'] = ['BlackBox','whitebox'];
	$data['programming'] = ['pair','xp'];
	$data['LaraRuby'] = true;
	return view('helper',$data);
});




Route::get('markdown/response',function(){
    $res = Response::make(" ***Code that Rock***",200);
    $res->headers->set('Content-Type','text/x-markdown');
    return $res;  
});





Route::get('/languages',function(){});
Route::get('/languages/java',function(){});
Route::get('/languages/objective-c',function(){});
