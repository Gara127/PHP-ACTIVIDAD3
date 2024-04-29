<?php

include("./utils/functions.php");
include("./includes/header.html");
include("./includes/footer.html");

$peso=$_POST["peso"];
$altura=$_POST["altura"];
if (empty($peso) || empty($altura)){
    echo "<p style='color:red;'><strong>Rogamos por favor revise el formulario, hay campos sin introducir.</strong></p>";
}else{
    $nombre=$_POST["nombre"];
    if (empty($nombre)){
        echo "<p style='color:red;'><strong>Rogamos por favor introducir nombre.</strong></p>";
    }else{  
        echo "<div id='texto2'>";
        echo "Hola ".$nombre.",</br>";
    }

    $fecha=$_POST["fecha"];
    $anios=mayor_edad($fecha);
    $IMCr= calculo_imc($peso,$altura);

    if (empty($fecha)){
        echo "<p style='color:red;'><strong>Rogamos por favor introducir fecha.</strong></p>";
    }else{ 
        if($anios<18){
            echo "lo sentimos, esta página es para mayores de edad.";
        }else{
            echo "rondas los ".$anios." años.</br>";
            echo "Tu IMC es de: ".$IMCr.".</br>";
            $frase=imc_status($IMCr);
            echo "Según tu IMC, tu estado es: ".$frase;
        }
        echo "</div>";
    }   
}

?>