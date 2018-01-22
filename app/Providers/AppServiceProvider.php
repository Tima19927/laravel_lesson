<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


    	Response::macro('myRes', function ( $value ) {

    		return Response::make($value);

	    });

        //
	    Blade::directive('mydir', function ($var){
	    return "<h1> New directive  = ".  $var  ."</h1>";
    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }
}
