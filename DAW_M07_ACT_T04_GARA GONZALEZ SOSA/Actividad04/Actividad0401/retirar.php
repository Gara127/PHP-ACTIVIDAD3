<?php
session_start();

 $i = -1;
$plazas = "";
$retirado = false;

if(isset($_POST["plazas"])){
    $plazas = $_POST["plazas"];
}

if(isset($_POST["numero"])){
    $i = $_POST["numero"];
}

switch ($plazas) {
    case "grandes":
        if($i >=0 && $i <=13){
            $retirado = plazas_grandes($i);
            ticket($retirado);
        }else{
            echo "<h3 style='color: red;'> Por favor introduzca el número de plaza grande correcta (del 0-13)";
        }
        break;
    case "pequeñas":
        if($i >=0 && $i <=9){
            $retirado = plazas_pequeñas($i);
            ticket($retirado);
        }else{
            echo "<h3 style='color: red;'> Por favor introduzca el número de plaza pequeña correcta (del 0-9)";
        }
        break;
    default:
        echo "<h3 style='color: red;'> Por favor inserte un tipo de parking válido! </h3></br>";
        break;
}

function plazas_grandes($i){
    if ($_SESSION['plazasGrandes'][$i] == 1) {
        $_SESSION['plazasGrandes'][$i] = 0;
        return true;   
    }

    return false;
}

function plazas_pequeñas($i){
    if ($_SESSION['plazasPequeñas'][$i] == 1) {
        $_SESSION['plazasPequeñas'][$i] = 0;
        return true;
    }

    return false;
}

function ticket($retirado){
    if ($retirado) {
        echo "<h3 style='color: green;'> Enhorabuena, tu coche ha sido retirado con éxito. </h3></br>";
    } else {
        echo "<h3 style='color: red;'> Lo sentimos, en estos momentos el parking indicado está vacío. </h3></br>";
    }
}

?>

<form action="formulario.html" method="post">
    <input type="submit" value="Volver al inicio">
</form>
