<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller{

	public function show($id) {
		echo $id ."<br/>";
		echo  __METHOD__;
	}





}