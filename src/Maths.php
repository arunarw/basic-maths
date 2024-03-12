<?php

namespace ArunaRW\BasicMaths;

use RuntimeException;

class Maths
{
    public function add(int|float $no1, int|float $no2): int
    {
        return $no1 + $no2;
    }

    public function subtract(int|float $no1, int|float $no2): int
    {
        return $no1 - $no2;
    }

    public function product(float $no1, float $no2): float
    {
        return $no1 * $no2;
    }

    public function divide(float $no1, float $no2): float
    {
        if ($no2 == 0) {
            throw new RuntimeException("Can't divide a number by zero.");
        }

        return $no1 / $no2;
    }
}