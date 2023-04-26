<?php

namespace App\FactoryMethod;

class Truck implements TransportInterface
{
    public function transport()
    {
        return "Truck transport by land!\n";
    }
}