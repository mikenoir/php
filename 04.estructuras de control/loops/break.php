<?php

// El break interrumpe el flujo del loop, al cumplir una condicion se sale del bucle

for ($i = 7; $i <= 100; $i++) {
    // Si esta condicion se cumple se corta el flujo y no continua
    if ($i % 6 == 0) {
        break;
    }
    echo "$i \n";
}