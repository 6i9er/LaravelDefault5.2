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
use \Illuminate\Support\Facades\App;
use \Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

//Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        ],
        function()
        {
        Route::resource('home',"WelcomeController");
    Route::get('/', function () {

//        return url('')."/  ".trans('messages.welcome');
        return view('welcome')->with("users" , \App\User::all());
    });

    Route::get('/language/{lang}', 'SiteSettingController@getChangelanguage');

        Route::auth();


        // fixing

            Route::get('/_debugbar/assets/stylesheets', [
                'as' => 'debugbar-css',
                'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
            ]);

            Route::get('/_debugbar/assets/javascript', [
                'as' => 'debugbar-js',
                'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
            ]);
//        Route::get('/home', 'HomeController@index');
});



