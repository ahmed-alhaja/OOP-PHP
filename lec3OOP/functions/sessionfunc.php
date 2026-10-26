<?php

class Session
{

    static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    static function get($key)
    {
        return $_SESSION[$key] ?? null;
    }
    static function flash($type, $message)
    {
        echo "<div class='alert alert-$type'>$message</div>";
    }

    static function remove($key)
    {
        unset($_SESSION[$key]);
    }
    static function removeAll()
    {
        session_destroy();
    }
    static function getAll() 
    {
        return $_SESSION;
    }
    static function check() {}
}


// errors => email 