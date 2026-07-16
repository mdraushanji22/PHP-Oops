<?php
// static method
class greeting
{
    public static function welcome()
    {
        echo "Hello World!";
    }
    public function __construct()
    {
        self::welcome();
    }
}

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
echo "<br></br>";
new greeting();
