<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing.html');
    }
    public function login()
    {
        return view('login.html');
    }
    public function signup()
    {
        return view('signup.html');
    }
}
?>