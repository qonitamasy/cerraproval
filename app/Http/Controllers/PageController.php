<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('Bootstrap.authentication-login');
    }

    public function register()
    {
        return view('Bootstrap.authentication-register');
    }

    public function icon()
    {
        return view('Bootstrap.icon-tabler');
    }

    public function sample()
    {
        return view('Bootstrap.sample-page');
    }

    public function alerts()
    {
        return view('Bootstrap.ui-alerts');
    }

    public function buttons()
    {
        return view('Bootstrap.ui-buttons');
    }

    public function cards()
    {
        return view('Bootstrap.ui-card');
    }

    public function forms()
    {
        return view('Bootstrap.ui-forms');
    }

    public function typography()
    {
        return view('Bootstrap.ui-typography');
    }


}
