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
use Illuminate\Support\Facades\Route;

Route::get('/',
	[
		'as'=>'home',

		function () {
	        return view('welcome');
		}
	]
);

Route::get(
	'/articles/',
	[
		'uses'=>'Admin\Core@getArticles' ,
		'as'=>'articles'
	]
);

Route::get(
	'article/{page}',
	[
		'uses' => 'Admin\Core@getArticle',
		'as'   => 'articles',
		'middleware' => 'mymiddle'
	]

);

//Route::resource('/pages', 'Admin\CoreResource');
//Route::controller('/pages','PagesController');























//Route::get('/article/{id}',
//
//	[
//		'as'=>'article',
//		function( $id ) {
//			echo $id;
//		}
//	]
//);


// Не обязательный параметр {post_id?}
//Route::get("/page/{cat}/{post?}", function ($cat = null, $post = null){
//
//	echo "Cat id = " . $cat . "<br/>";
//	echo "Post id = " . $post ."<br/>";
//
//	return view('page',
//		array("test"=>121234123)
//	);
//})->where(
//	[
//		'cat'  => '[A-Za-z]+',
//		'post' =>'[0-9]+'
//	]
//);

//Адрес  вида admin/page/create
//Route::group( ['prefix'=>'admin'], function () {
//
//	Route::get('page/create', function() {
//
////		$route = Route::current();
////		echo $route->getName();
////		echo $route->getParameter('var', 25);
//
////		return redirect()->route('article', ['id' => 25]);
//	})->name('createpage');
//
//
//	Route::get('page/edit', function () {
//		echo "page/edit";
//	});
//
//});

//Route::post("/pagePost", function (){
//	return view('page');
//});
//
////  запросы для get post
//Route::match(['get','post'],'/testPostGet', function (){
//
//});
//
//
////Любой тип запроса
//Route::any('anytest', function (){
//	echo "A N Y";
//});