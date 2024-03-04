<?php

namespace Tests\Unit;
use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function it_can_add_two_numbers()
    {
        $calculator = new Calculator();

        $result = $calculator->add(3, 5);

        $this->assertEquals(8, $result);
    }

    /** @test */
    public function it_can_subtract_two_numbers()
    {
        $calculator = new Calculator();

        $result = $calculator->subtract(10, 4);

        $this->assertEquals(6, $result);
    }
}
