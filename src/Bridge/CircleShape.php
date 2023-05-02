<?php

namespace App\Bridge;

class CircleShape implements ShapeInterface
{
    private float $width;

    private float $height;

    public function __construct(private ColorInterface $color) // Bridge two objects using composion
    {
        $this->width = 100;
        $this->height = 100;
    }

    public function setShape(float $width, float $height): self
    {
        $this->width = $width;
        $this->height = $height;

        return $this;
    }

    public function getShape(): string
    {
        return "Circle: " . (M_PI * $this->width) . ", Color: " . $this->color->getColor();
    }
}