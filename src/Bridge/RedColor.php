<?php

namespace App\Bridge;

class RedColor implements ColorInterface
{
    private string $color;

    public function __construct()
    {
        $this->color = "red";    
    }

    public function getColor(): string
    {
        return $this->color;
    }
}