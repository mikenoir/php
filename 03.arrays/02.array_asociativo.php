<?php

$person = [
    'name'      => 'Miguel',
    'age'       => 27,
    'height'    => 1.77,
    'married'   => true,
    'kids'      => null
];

foreach( $person as $key => $value ) {
    echo "La llave $key corresponde al valor $value \n";
}

$age = [
    'Peter' => 35,
    'Joe'   => 27,
    'Ben'   => 43
];
// Ordenar segun el valor
asort($age); // arsort() para ordenar descendente
var_dump($age);

//Ordenar segun la llave
ksort($age); // krsort() para ordenar descendente
var_dump($age);