<?php
// static method

class calc
{
    public static function sum($a, $b)
    {

        return $a + $b;

    }
}
// Call static method

$res = calc::sum(20, 30);
echo "sum of value : " . $res;
