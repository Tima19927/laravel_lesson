<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class ContactController extends Controller
{

//	protected $request;
//	public function __construct(Request $request) {
//		$this->request = $request;
//	}

	public function show(Request $request, $id=null) {

//		echo '<h3>'. $id. '</h3>';

//    	echo '<pre>'.print_r($request->input('name', 'Default'), true).'</pre> ' ;
//		echo '<pre>'.print_r($request->get('name'), true).'</pre> ' ;
//		if( $request->has('name') ){
//			echo '<pre>'.print_r($request->all(), true).'</pre> ' ;
//			echo '<pre>'.print_r($request->only(['name','message']), true).'</pre> ' ;
//			echo '<pre>'.print_r($request->except(['message']), true).'</pre> ' ;
//			echo '<pre>'.print_r($request->name, true).'</pre> ' ;
//			echo '<pre>'.print_r($request->path(), true).'</pre> ' ;

//		}
//    	echo '<pre>'.print_r($request->has('name'), true).'</pre> ' ;

echo $request->url() ."<br/>";
echo $request->fullUrl() ."<br/>";
		if( $request->is('contact/*')){
			echo $request->path();
		}

    	if( view()->exists('default.contact') ){
    		return view('default.contact')->withTitle('Contact');
	    }
	    else{
    		abort(404);
	    }

    }
}
