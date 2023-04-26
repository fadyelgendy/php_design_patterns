<?php

namespace App\FactoryMethod;

use Exception;

class Runner
{
    private Logistics $transport;

    public function __construct(string $type = 'road')
    {
        if ($type == strtolower('road')) {
            $this->transport = new RoadLogistics();
        }else if ($type == strtolower('sea')) {
            $this->transport = new SeaLogistics();
        } else {
            throw new Exception("ERROR: Unkown Transport Type!");
        }
    }

    public function run()
    {
        echo $this->transport->transport();
    }
}