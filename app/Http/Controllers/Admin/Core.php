<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Core extends Controller
{
	public function __construct() {
	}

	public  function  getArticles() {

    }

    public function getArticle( $id ) {
		echo "Response = ".$id;
    }

}
