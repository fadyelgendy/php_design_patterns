<?php 

namespace App\FactoryMethod;

class Ship implements TransportInterface
{
    public function transport()
    {
        return "Ship Transport By sea!\n";
    }
}