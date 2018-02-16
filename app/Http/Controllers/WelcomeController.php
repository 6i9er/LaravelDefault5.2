<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Libraries\HelpersLangHelper;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\LaravelLocalization;

class WelcomeController extends Controller
{
    function __construct() {

    }

    public function index(){

        return view('welcome');
        return trans('messages.welcome');
        echo url()->current()."a";
//        return LaravelLocalization::setLocale();
        return Session::get('webLanguage');
        return "aaaaaaA";
    }
}
