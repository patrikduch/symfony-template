<?php

namespace App\Service;

class CalculatorService
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}