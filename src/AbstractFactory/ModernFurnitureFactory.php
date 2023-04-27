<?php

namespace App\AbstractFactory;

class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): ChairInterface
    {
        return new ModernChair();
    }
}