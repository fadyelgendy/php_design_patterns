<?php

namespace App\AbstractFactory;

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): ChairInterface
    {
        return new VictorianChair();
    }
}