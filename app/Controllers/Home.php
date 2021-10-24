<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing');
    }
    public function login()
    {
        return view('login');
    }
}
?>