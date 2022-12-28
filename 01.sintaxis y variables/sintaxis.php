<?php

$name = "Miguel";
$lastname = "Caballero";

// Funciones para imprimir en pantalla echo, print

echo $name . PHP_EOL;
print $lastname . PHP_EOL;

//Concatenar así solo es posible con comilla doble, para hacer enfasis en variable se agregan {} pero no es necesario
echo "Mi nombre completo es $name {$lastname} \n";

print('Mi nombre completo es ' . $name . ' ' . $lastname . PHP_EOL);

// Para obtener informacion de una variable se usa var_dump o print_r
var_dump($name);

$array = ['Miguel', 'Caballero'];
print_r($array);
