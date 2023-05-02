<?php

namespace App\Bridge;

class Runner
{
    public function run()
    {
        $circle = new CircleShape(new RedColor);
        echo $circle->getShape() . "\n";

        $circle2 = new CircleShape(new BlueColor);
        $circle2->setShape(45.5, 104);
        echo $circle2->getShape() . "\n";
    }
}