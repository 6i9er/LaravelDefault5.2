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

        return url('')."/  ".trans('messages.welcome');
//        return view('welcome');
    });

    Route::get('/language/{lang}', function (Request $request) {
        $locale = $request->lang;
        $languageArr = array("ar","en");
        if(in_array($locale , $languageArr)){
            App::setLocale($locale);
            return Redirect::to("/".$locale."/",301);
        }else{
            return Redirect::to("/",301);
        }
    });

        Route::auth();

        Route::get('/home', 'HomeController@index');
});

function test(){
    echo "aaaaaaaA";
}

