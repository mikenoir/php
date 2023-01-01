<?php

// Array simple
$names = [ 'Miguel', 'Monse', 'Caguamas' ];

var_dump($names);

// Modificar valores
$names[2] = $names[1];
var_dump($names);

unset($names[2]);
var_dump($names);

// Las variables &$variable son por referencia, respeta el mismo espacio de memoria
// Son utilizados para modificar elementos de un array
foreach( $names as $key => &$name ) {
    $name .= "Hola mi nombre es: $name";
}

$fruits1 = ["limón", "naranja"];
$fruits2 = ["limón", "mandarina"];

// diferencias entre arrays
echo print_r(array_diff($fruits1, $fruits2), 1) . PHP_EOL;
// elementos en común
echo print_r(array_intersect($fruits1, $fruits2), 1) . PHP_EOL;

// Convertir array a string, separado por , en este ejemplo
$string_frutas = implode(", ", $fruits1);
var_dump($string_frutas);

// Convertir string a array
$array_frutas = explode(", ", $string_frutas);
var_dump($array_frutas);

// Eliminar elementos duplicados
$frutas = array_merge($fruits1, $fruits2);
echo "Frutas repetidas" . PHP_EOL;
var_dump($frutas);

echo "Frutas unicas \n";
$frutas = array_unique($frutas);
var_dump($frutas);