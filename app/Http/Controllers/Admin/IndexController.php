<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function show() {
			//		Передача параметров  1 способ
		$data = ['title'=>'Laravel 5'];

		if( view()->exists('default.template')){
//			view()->name('default.template', 'myview');
//			view()->of('myview')->withTitlr();


			view('default.template', ['title'=>'Test']);


//			return view('default.template', $data );
		}
		else {
			abort(404);
		}



		//Передача параметров  2 способ
//		$data = ['title'=>'Laravel 5'];
//		$view = view('default.template')->with($data);
//		$view->with('title2', 'Title 2');
//		$view->with('title3', 'Title 3');
//		$view->with('title4', 'Title 4');
//
//		return  $view;



//		return view('default.template');

	}
}
