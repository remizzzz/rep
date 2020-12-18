<?php

namespace Remizov;

use core\EquationInterface as EI;
use InvalidArgumentException;

class QuadraticEquation extends LinearEquation implements EI
{
    function solve($a, $b, $c): array
    {
        if ($a === 0) {
            return parent::solveLinear($b, $c);
        }

        $discriminant = pow($b, 2) - 4 * $a * $c;

        if ($discriminant < 0) {
            throw new InvalidArgumentException("Invalid quadratic eq: discriminant is less than 0");
        }

        if ($c === 0) {
            $this->X = [0, -$b];
        } else {
            $this->X = [(-$b + sqrt($discriminant)) / 2 / $c,
                ($b + sqrt($discriminant)) / 2 / $c];
        }

        return $this->X;
    }
} 