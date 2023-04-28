<?php

namespace App\Builder;

class StoneBuilder implements BuilderInterface
{
    private House $house;

    public function reset()
    {
        $this->house = new House();
    }

    public function buildWall()
    {
        $this->house->setWalls("Stone Walles");
    }

    public function buildFloor()
    {
        $this->house->setFloor("Stone Floor");
    }

    public function getHouse(): House
    {
        return $this->house;
    }
}