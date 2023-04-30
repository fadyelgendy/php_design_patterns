<?php

namespace App\Singleton;

class Runner 
{
    public function run()
    {
        $ob1 = Singleton::getInstance();
        echo spl_object_hash($ob1) . "\n";

        $ob2 = Singleton::getInstance();
        echo spl_object_hash($ob2) . "\n";
    }
}