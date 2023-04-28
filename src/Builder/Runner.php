<?php

namespace App\Builder;

use TypeError;

class Runner
{
    private BuilderInterface $builder;

    public function build(string $type)
    {
        if (strtolower($type) == 'wood') {
            $this->builder = new WoodenBuilder();
        } else if (strtolower($type) == 'stone') {
            $this->builder = new StoneBuilder();
        } else {
            throw new TypeError("ERROR: Unkown Builder Type!");
        }

        $director = new Director($this->builder);
        $director->make();

        $house = $this->builder->getHouse();

        echo $house->getWalls() . "\n";
        echo $house->getFloor() . "\n";
    }
}