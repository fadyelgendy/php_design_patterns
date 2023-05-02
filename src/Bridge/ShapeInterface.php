<?php

 namespace App\Bridge;

interface ShapeInterface
{
    public function setShape(float $width, float $height): self;

    public function getShape(): string;
}