<?php

namespace App\Builder;

class WoodenBuilder implements BuilderInterface
{
    private House $house;

    public function reset()
    {
        $this->house = new House();
    }

    public function buildWall()
    {
        $this->house->setWalls("Wooden Walles");
    }

    public function buildFloor()
    {
        $this->house->setFloor("Wooden Floor");
    }

    public function getHouse(): House
    {
        return $this->house;
    }
}