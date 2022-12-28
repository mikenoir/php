<?php

$a = 2 + 3 * 8;
var_dump($a);

$b = (2 + 3) * 8;
var_dump($b);

$c = 2 + (3 * 8);
var_dump($c);

// OPERADORES ARTIMETICOS -------------------------------------

// negación, -
$x = 10;
echo - $x . PHP_EOL;

// adición, +
$x = -10;
$y = 8;
echo $x + $y . PHP_EOL;

// sustracción, -
$x = 10;
$y = 6;
echo $x - $y . PHP_EOL;
// multiplicación, *
echo $x * $y . PHP_EOL;
// división, /
echo $x / $y . PHP_EOL;
// módulo, %
echo $x % $y . PHP_EOL;
// exponente, **
echo $x ** $y . PHP_EOL;

// OPERADORES DE COMPARACION -------------------------------------

$x = 100;
$y = "100";
// igual
var_dump($x == $y);
// idéntico valor y tipo de dato
var_dump($x === $y);
// diferente
var_dump($x != $y);
;
var_dump($x <> $y);
// No idéntico
var_dump($x !== $y);

$x = 10;
$y = 5;
// menor que
var_dump($x < $y);
// mayor que
var_dump($x > $y);
// menor o igual que
var_dump($x <= $y);
// mayor o igual que
var_dump($x >= $y);

// nave espacial
$a = 5;
$b = 10;
echo ($a <=> $b) . PHP_EOL; // retorna -1 porque $a es menor que $b

$a = 10;
$b = 10;
echo ($a <=> $b) . PHP_EOL; // retorna 0 son iguales

$a = 15;
$b = 10;
echo ($a <=> $b) . PHP_EOL; // retorna +1 porque $a es mayor que $b

// fusión de null Operador ternario ?
$var = isset($_GET['foo']) ? $_GET['foo'] : "valor_por defecto";
echo $var . PHP_EOL;