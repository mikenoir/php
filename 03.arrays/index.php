<?php

// Array simple
$names = [ 'Miguel', 'Monse', 'Caguamas' ];

var_dump($names);

$names[2] = $names[1];
var_dump($names);

unset($names[2]);
var_dump($names);

$fruits1 = ["limón", "naranja"];
$fruits2 = ["limón", "mandarina"];

// diferencias entre arrays
echo print_r(array_diff($fruits1, $fruits2), 1) . PHP_EOL;
// elementos en común
echo print_r(array_intersect($fruits1, $fruits2), 1) . PHP_EOL;

$string_frutas = implode(", ", $fruits1);
var_dump($string_frutas);

$array_frutas = explode(", ", $string_frutas);
var_dump($array_frutas);

// eliminar elementos duplicados
$frutas = array_merge($fruits1, $fruits2);
echo "frutas (repetidas y no repetidas)" . PHP_EOL;
var_dump($frutas);
$frutas = array_unique($frutas);
var_dump($frutas);

// Array asociativo, pueden ser de diferentes tipos de datos
$person = [
    'name'      => 'Miguel',
    'age'       => 27,
    'height'    => 1.77,
    'married'   => true,
    'kids'      => null
];

$family = [
    [
        'name'      => 'Miguel',
        'age'       => 27,
        'height'    => 1.77,
        'married'   => true,
        'kids'      => null
    ],
    [
        'name'      => 'Monse',
        'age'       => 26,
        'height'    => 1.77,
        'married'   => true,
        'kids'      => null
    ]
];

$team = [
    'goalkeepers'   => [
        'Goalkeeper 1',
        'Goalkeeper 2',
        'Goalkeeper 3'
    ],
    'defenders'   => [
        'Defender 1',
        'Defender 2',
        'Defender 3'
    ],
    'strikers'   => [
        'Striker 1',
        'Striker 2',
        'Striker 3'
    ],
];