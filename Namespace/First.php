<?php
namespace first;

class test
{
    public function __construct()
    {
        echo "This is test class<br>";

        $num1 = 10;
        $num2 = 20;
        $sum  = $num1 + $num2;

        echo "Addition of $num1 + $num2 = $sum <br> ";
    }
}
