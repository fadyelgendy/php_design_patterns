<?php

namespace App\AbstractFactory;

class Runner
{
    private FurnitureFactory $factory;

    public function getFactory(string $type = 'modern'): FurnitureFactory
    {
        if ('modern' == strtolower($type)) {
            $this->factory = new ModernFurnitureFactory();
        }

        if ('victorian' == strtolower($type)) {
            $this->factory = new VictorianFurnitureFactory();
        }

        return $this->factory;
    }
}
