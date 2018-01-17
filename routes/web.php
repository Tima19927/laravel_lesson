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

// Не обязательный параметр {post_id?}
Route::get("/page/{cat}/{post?}", function ($cat = null, $post = null){

	echo "Cat id = " . $cat . "<br/>";
	echo "Post id = " . $post ."<br/>";

	return view('page',
		array("test"=>121234123)
	);
})->where(
	[
		'cat'  => '[A-Za-z]+',
		'post' =>'[0-9]+'
	]
);


Route::post("/pagePost", function (){
	return view('page');
});

//  запросы для get post
Route::match(['get','post'],'/testPostGet', function (){

});


//Любой тип запроса
Route::any('anytest', function (){
	echo "A N Y";
});