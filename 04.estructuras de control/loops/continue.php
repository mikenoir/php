<?php

// continue se usa para interrumpir el flujo, a diferencia del break este no lo corta por completo,
// solo no continua con el flujo y evalua la siuiente expresion

for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
        continue;
    }
    // esta línea no se ejecuta si entramos en la condición
    echo $i. ", ";
}