<?php

class Personaje {
    protected $nombre;
    protected $especie;
    protected $experiencia;

    public function __construct($nombre, $especie, $experiencia) {
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->experiencia = $experiencia;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre){
		$this->nombre = $nombre;
	}

    public function getEspecie() {
        return $this->especie;
    }

    public function setEspecie($especie){
		$this->especie = $especie;
	}

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia){
		$this->experiencia = $experiencia;
	}
    
    public function calcularPuntos() {
        // Este método será implementado en las clases derivadas (guerrero, mago, explorador).
        // Cada clase hija implementará su propia lógica de cálculo de puntos.
    }
}

?>
