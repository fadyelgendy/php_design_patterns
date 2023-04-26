<?php

namespace App\FactoryMethod;

class SeaLogistics extends Logistics
{
    public function createTransport(): TransportInterface
    {
        return new Ship();
    }
}