<?php

namespace App\AbstractFactory;

class ModernChair implements ChairInterface
{
    public function hasLegs(): string
    {
        return "Modern Chair has Legs";
    }

    public function sitOn(): string
    {
        return "You can sit on modern chair";
    }
}