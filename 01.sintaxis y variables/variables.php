<?php

// Tipos escalares
$name = "Miguel Caballero"; // string
$age = 27; // int
$height = 1.77; // float
$married = true; // bool
$kids = null; // NULL

var_dump($name);
var_dump($age);
var_dump($height);
var_dump($married);
var_dump($kids);

// Tipos compuestos
$arreglo = array('Miguel', 'Monse', 'Caguamas');
$objeto = new stdClass();

var_dump($arreglo);
var_dump($objeto);

$data = ['string', 27, 14.5, new stdClass(), [], NULL];

foreach( $data as $item ) {
    echo gettype($item) . PHP_EOL;
}

// Constantes
const NOMBRE1 = "un valor";
var_dump(NOMBRE1);

define('NOMBRE2', "otro valor");
var_dump(NOMBRE2);

define("ANIMALES", ["gato","perro"]);
var_dump(ANIMALES);

// PHP ofrece una serie de constantes predefinidas
var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);
var_dump(__FUNCTION__);

// Ambito de variables
$local = 5;
imprimir();
imprimirGlobal();
echo $local . PHP_EOL;

function imprimir() {
    $local = 10;
    echo $local . PHP_EOL;
}

function imprimirGlobal() {
    global $local;
    echo $local . PHP_EOL;
}