<?php

namespace App\Prototype;

class Runner
{
    public function run()
    {
        $circle = new Circle();

        $circle->x = 10;
        $circle->y = 20;
        $circle->color = 'green';

        $circle2 = clone $circle;

        echo $circle->color . "\n";
        echo $circle2->color . "\n";
    }
}