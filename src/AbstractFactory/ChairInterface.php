<?php

namespace App\AbstractFactory;

interface ChairInterface 
{
    public function hasLegs(): string;

    public function sitOn(): string;
}