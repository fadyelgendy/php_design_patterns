<?php

namespace App\AbstractFactory;

use TypeError;

class Runner
{
    private FurnitureFactory $factory;

    public function getFactory(string $type = 'modern'): FurnitureFactory
    {
        if ('modern' == strtolower($type)) {
            $this->factory = new ModernFurnitureFactory();
        } else if ('victorian' == strtolower($type)) {
            $this->factory = new VictorianFurnitureFactory();
        } else {
            throw new TypeError("ERROR: Unkown Abstract factory Type");
        }

        return $this->factory;
    }
}
