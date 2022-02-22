<?php

namespace AwesomePhpCode\SolidPrinciples\OCP;

class Rectangle extends Figure
{
    protected float $length = 0;
    protected float $width = 0;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function computeArea(): float
    {
        return $this->width * $this->length;
    }
}
