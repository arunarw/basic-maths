<?php

namespace ArunaRW\BasicMaths\Tests;

use RuntimeException;
use ArunaRW\BasicMaths\Maths;
use PHPUnit\Framework\TestCase;

class MathsTest extends TestCase
{
    protected Maths $maths;

    protected function setUp(): void
    {
        parent::setUp();

        $this->maths = new Maths;
    }

    /** @test */
    public function it_adds_two_numbers()
    {
        $this->assertEquals(30, $this->maths->add(10, 20));
    }

    /** @test */
    public function it_subtracts_two_numbers()
    {
        $this->assertEquals(10, $this->maths->subtract(20.0, 10.0));
    }

    /** @test */
    public function it_products_two_numbers()
    {
        $this->assertEquals(200, $this->maths->product(20.0, 10.0));
    }

    /** @test */
    public function it_divides_two_numbers()
    {
        $this->assertEquals(4, $this->maths->divide(20.0, 5.0));
    }

    /** @test */
    public function it_gives_an_error_message_when_try_to_divide_a_number_by_zero()
    {
        $this->expectException(RuntimeException::class);

        $this->maths->divide(20, 0);
    }
}