<?php

class A
{

}


class B extends A
{
    protected $a;
    public function __construct($a)
    {
        $this->a = $a;
    }
}

class C extends B
{
    protected $a, $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct($a);
    }
}

$a = new A();
$b1 = new B($a);
$b2 = new B($a);
$b3 = new B($b1);
$c = new C($b2, $b3);

?> 