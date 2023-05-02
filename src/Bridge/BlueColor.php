<?php

namespace App\Bridge;

class BlueColor implements ColorInterface
{
    private string $color;

    public function __construct()
    {
        $this->color = "blue";    
    }

    public function  getColor(): string
    {
        return $this->color;
    }
}