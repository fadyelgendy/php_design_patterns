<?php

namespace App\Builder;

class House
{
    private string $walls;

    private string $floor;

    public function setWalls(string $walls): self
    {
        $this->walls = $walls;

        return $this;
    }

    public function getWalls(): string
    {
        return $this->walls;
    }

    public function setFloor(string $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getFloor(): string
    {
        return $this->floor;
    }
}
