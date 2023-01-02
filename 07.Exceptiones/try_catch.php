<?php

// throw - mostrar mensajes de excepción customizados
function dividir($dividendo, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("División por cero");
    }
    return $dividendo / $divisor;
}

echo dividir(1, 2) . PHP_EOL;
// el siguiente daría error
// echo dividir(1, 0);

// try catch
try {
    echo dividir(1, 0) . PHP_EOL;
} catch (Exception $e) {
    // aquí manejamos el error de la ejecución
    echo "Error: Deshabilitado método divide \n";
} finally  {
    // código a realizar siempre al final de la ejecutación falle o no falle
    echo "Proceso completado \n";
}
function dividir2($dividendo, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("División por cero", 1);
    }
    return $dividendo / $divisor;
}
// try catch
try {
    echo dividir2(1, 0)."<br>";
} catch (Exception $e) {
    // aquí manejamos el error de la ejecución
    echo "Deshabilitado método divide \n";
    // usemos $e
    $code = $e->getCode();
    $message = $e->getMessage();
    $file = $e->getFile();
    $line = $e->getLine();
    echo "Exception throw en archivo $file, línea $line: [Code $code] $message \n";
} finally  {
    // código a realizar siempre al final de la ejecutación falle o no falle
    echo "Proceso completado \n";
}