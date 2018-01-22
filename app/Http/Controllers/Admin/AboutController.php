<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
//use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{
    public function show(Response $response) {

		if ( view()->exists('default.about') ){

//			echo '<pre>'.  print_r($response, true)  .'</pre>';

			$view = view('default.about')->withTitle('Hello world')->render();

//			return ( new Response($view))->header('Content-type', 'newType');
//			return response($view)->header('Content-type', 'NewType2');

//			 return \response()->view('default.about', ['title'=>'About1']);//json(['game'=>'fifa 18', 'name'=>'Tima']);
//			 return \response()->download('robots.txt','mytext.txt');//json(['game'=>'fifa 18', 'name'=>'Tima']);

//			return redirect('/');
return redirect( )->action('Admin\ContactController@show');


//			return view('default.about')->withTitle('About');
		}else{
			abort(404);
		}
    }
}
