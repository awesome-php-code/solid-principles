<?php

namespace AwesomePhpCode\SolidPrinciples\Tests\OCP;

use AwesomePhpCode\SolidPrinciples\OCP\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    /** @test */
    public function itComputesRectangleArea()
    {
        $rectangle = new Rectangle(5, 4);

        $this->assertSame(20.0, $rectangle->computeArea());
    }
}
