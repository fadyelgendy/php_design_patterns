<?php

namespace App\Prototype;

class Circle extends Shape
{
    public function __construct1(int $x, int $y, string $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    public function __clone()
    {
        $this->x = $this->x;
        $this->y = $this->y;
        $this->color = $this->color;
    }
}