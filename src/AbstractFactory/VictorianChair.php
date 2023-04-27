<?php

namespace App\AbstractFactory;

class VictorianChair implements ChairInterface
{
    public function hasLegs(): string
    {
        return "Victorian Has two Legs";
    }

    public function sitOn(): string
    {
        return "You can set on Victorian Chair";
    }
}