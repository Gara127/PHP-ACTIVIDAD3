<?php

class Mago extends Personaje {
    protected $secretosDescubiertos;
    protected $hechizosLanzados;

    public function __construct($nombre, $especie, $experiencia, $secretosDescubiertos, $hechizosLanzados) {
        parent::__construct($nombre, $especie, $experiencia);
        $this->secretosDescubiertos = $secretosDescubiertos;
        $this->hechizosLanzados = $hechizosLanzados;
    }

    public function calcularPuntos() {
        return ($this->secretosDescubiertos * 5) + ($this->hechizosLanzados * 10);
    }
}

?>
