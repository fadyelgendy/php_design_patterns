<?php

namespace App\Singleton;

class Singleton
{
    private static $instance;

    public function __wakeup()
    {
        throw new \Exception("ERROR: Can not serialize a singleton");
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}