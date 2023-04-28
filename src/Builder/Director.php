<?php

namespace App\Builder;

class Director
{
    public function __construct(private BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function make()
    {
        $this->builder->reset();

        $this->builder->buildWall();

        $this->builder->buildFloor();
    }
}