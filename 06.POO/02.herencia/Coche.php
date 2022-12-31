<?php

class Coche {
    public string $_marca;
    protected int $_valocidad_maxima;

    function __construct($marca, $velocidad_maxima){
        $this->_marca = $marca;
        $this->_velocidad_maxima = $velocidad_maxima;
    }

    function arrancaMotor(){
        echo "BRUM..!! \n";
    }
}

// Si la clase que hereda no tiene constructor, se ejecuta el constructor de la clase padre
class CocheF1 extends Coche
{
    public function rompeMotor(){
        echo "El motor del " . $this->_marca . " esta roto, al llegar a los " . $this->_velocidad_maxima . "Km/h \n";
    }
}

$auto = new CocheF1("McClaren", 90);
$auto->arrancaMotor();
$auto->rompeMotor();