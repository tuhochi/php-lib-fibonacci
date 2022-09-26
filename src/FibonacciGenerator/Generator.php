<?php

namespace FibonacciGenerator;

class Generator
{

    public function generate($n)
    {
        return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
    }
}