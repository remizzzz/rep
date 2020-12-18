<?php

class A {
    function solve($b, $c): array {
        if ($b === 0) {
            throw new InvalidArgumentException("Equation doesn't exist");
        }

        $this->X = -($b / $c);
        return [$this->X];
    }
    protected $X;
}


class B extends A {
    function solve($a, $b, $c): array {
        if ($a === 0) {
            return parent::solve($b, $c);
        }

        $discriminant = pow($b, 2) - 4 * $a * $c;

        if ($discriminant < 0) {
            throw new InvalidArgumentException("Invalid quadratic eq: discriminant is less than 0");
        }

        $this->X = [(-$b + sqrt($discriminant)) / 2 / $c,
                    ($b + sqrt($discriminant)) / 2 / $c];

        return $this->X;
    }
}

$eq = new B();
$solutions = $eq->solve(0,2, 4);

foreach ($solutions as $s) {
    echo $s . '  ';
}

?>