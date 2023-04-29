<?php

namespace App\Prototype;

abstract class Shape implements ShapeInterface
{ 
    public string $color;
    public int $x;
    public int $y;

    abstract public function __clone();
}