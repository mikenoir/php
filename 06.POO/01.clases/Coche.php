<?php
class Coche{

    /* modificadores de acceso:
     * public
     * private
     * protected
     */
    private string $marca;
    public int $velocidad_maxima;

    function __construct($marca, $velocidad_maxima){
        $this->marca = $marca;
        $this->velocidad_maxima = $velocidad_maxima;
    }

    function __destruct(){
        echo "El coche está roto";
    }

    function getMarca(){
        return $this->marca;
    }

    function setMarca ($marca){
        $this->marca = $marca;
    }
}

// instanciamos la clase
$auto = new Coche("Renault", 50 );
var_dump($auto);

$auto->setMarca("Fiat");
var_dump($auto->getMarca());

$auto->velocidad_maxima = 90;
var_dump($auto->velocidad_maxima);

var_dump($auto);
