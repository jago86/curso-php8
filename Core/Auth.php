<?php

namespace Core;

use App\Models\User;

class Auth
{
    public static function tryLogin($email, $password)
    {
        $user = User::where('email', $email)->first();

        if (!empty($user) AND password_verify($password, $user->password)) {

            static::ensureSessionStarted();

            $_SESSION['email'] = $user->email;
            $_SESSION['name'] = $user->name;
            $_SESSION['id'] = $user->id;

            return true;
        }

        return false;
    }

    public static function check()
    {
        static::ensureSessionStarted();

        if (empty($_SESSION['id'])) {
            return false;
        }

        return true;
    }

    public static function ensureSessionStarted()
    {
        if (empty(session_id())) {
            session_start();
        }
    }

    public static function logout()
    {
        session_start();
        session_destroy();
    }
}
