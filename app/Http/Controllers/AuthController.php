<?php

namespace App\Http\Controllers;


class AuthController extends Controller
{
    //

    public function login() {}

    public function register() {}

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }
}
