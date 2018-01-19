<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function show() {
			//		Передача параметров  1 способ
		$data = [
			'title'=>'Laravel Project',
			'data' => [
				'one'   => 'List 1',
				'two'   => 'List 2',
				'three' => 'List 3',
				'four'  => 'List 4',
				'five'  => 'List 5'
			],
			'dataI' => [
				'List 1',
				'List 2',
				'List 3',
				'List 4',
				'List 5',
			],
			'bvar' => true,
			'script' => '<script>alert("Hello")</script>'
		];


		if( view()->exists('default.index')){
			view('default.index', ['title'=>'Test']);
			return view('default.index', $data );
		}
		else {
//			abort(404);
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
