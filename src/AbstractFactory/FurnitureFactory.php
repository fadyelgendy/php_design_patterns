<?php

namespace App\AbstractFactory;

interface FurnitureFactory
{
    public function createChair(): ChairInterface;
}