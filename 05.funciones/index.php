<?php

$numero1 = 2.7;
$numero2 = 4;

echo suma($numero1, $numero2) . PHP_EOL;
echo resta($numero1, $numero2) . PHP_EOL;
echo multiplicacion($numero1, $numero2) . PHP_EOL;
echo division($numero1, $numero2) . PHP_EOL;
function suma( float $numero1, float $numero2 ): float
{
    return $numero1 + $numero2;
}

function resta( float $numero1, float $numero2 ): float
{
    return $numero1 - $numero2;
}

function division( float $numero1, float $numero2 ): float
{
    return $numero1 / $numero2;
}

function multiplicacion( float $numero1, float $numero2 ): float
{
    return $numero1 * $numero2;
}