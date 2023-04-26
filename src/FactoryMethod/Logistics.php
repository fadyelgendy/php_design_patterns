<?php

namespace App\FactoryMethod;

abstract class Logistics
{
    abstract public function createTransport(): TransportInterface;

    public function transport(): string
    {
        $transport = $this->createTransport();
        return $transport->transport();
    }
}