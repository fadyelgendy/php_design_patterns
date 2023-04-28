<?php

namespace App\Builder;

interface BuilderInterface
{
    public function reset();

    public function buildWall();

    public function buildFloor();
}