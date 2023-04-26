<?php

namespace App\FactoryMethod;

class RoadLogistics extends Logistics
{
    public function createTransport(): TransportInterface
    {
        return new Truck();
    }
}