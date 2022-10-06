<?php

namespace App\Controllers;

use Core\Auth;

class LoginController
{
    public function show()
    {
        return view('login-form');
    }

    public function login()
    {
        Auth::tryLogin($_POST['email'], $_POST['password']);

        if (Auth::check()) {
            return redirect('/');
        }

        return redirect('login-form');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
