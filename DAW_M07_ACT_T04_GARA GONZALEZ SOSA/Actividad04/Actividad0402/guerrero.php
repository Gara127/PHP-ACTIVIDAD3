<?php

class Guerrero extends Personaje {
    protected $enemigosAbatidos;
    protected $danioSufrido;

    public function __construct($nombre, $especie, $experiencia, $enemigosAbatidos, $danioSufrido) {
        parent::__construct($nombre, $especie, $experiencia);
        $this->enemigosAbatidos = $enemigosAbatidos;
        $this->danioSufrido = $danioSufrido;
    }

    public function calcularPuntos() {
        return ($this->enemigosAbatidos * 10) + ($this->danioSufrido * 5);
    }
}

?>
