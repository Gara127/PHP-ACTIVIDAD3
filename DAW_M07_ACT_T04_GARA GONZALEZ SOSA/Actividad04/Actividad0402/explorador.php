<?php

class Explorador extends Personaje {
    protected $objetivosDescubiertos;
    protected $vecesSinSerDescubierto;

    public function __construct($nombre, $especie, $experiencia, $objetivosDescubiertos, $vecesSinSerDescubierto) {
        parent::__construct($nombre, $especie, $experiencia);
        $this->objetivosDescubiertos = $objetivosDescubiertos;
        $this->vecesSinSerDescubierto = $vecesSinSerDescubierto;
    }

    public function calcularPuntos() {
        return ($this->objetivosDescubiertos * 10) + ($this->vecesSinSerDescubierto * 5);
    }
}

?>
