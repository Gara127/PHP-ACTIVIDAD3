<?php

function mayor_edad($fecha){
    $hoy=date('Y-m-d');

    $fecha = new DateTime($fecha);
    $hoy = new DateTime($hoy);
    $diferencia = $hoy->diff($fecha);
    $anios = $diferencia->y;
    return $anios;
}

function calculo_imc($peso,$altura){
    $IMC= $peso/($altura**2);
    $IMCr= sprintf("%.2f",$IMC);
    return $IMCr;

}    

function imc_status($IMCr) {
    if($IMCr<18.5){
        return "Peso insuficiente.</br>";
    }

    if ($IMCr>=18.5 && $IMCr<= 25){
        return "Peso normal</br>";
    }   

    if ($IMCr>=25 && $IMCr<= 50){
        return "Sobrepeso</br>";
    }   
    
    if ($IMCr>= 50){
        return "Obesidad</br>";
    }
}
?>