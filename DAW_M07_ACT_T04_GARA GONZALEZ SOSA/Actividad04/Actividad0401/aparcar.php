<?php
session_start();

$coche = "";
$aparcado = false;
if(isset($_POST["coche"])){
    $coche = $_POST["coche"];
}

switch ($coche) {
    case "grande":
        $aparcado = coche_grande();
        ticket($aparcado);
        break;
    case "pequeño":
        $aparcado = coche_pequeño();
        ticket($aparcado);
        break;
    default:
        echo "<h3 style='color: red;'> Por favor inserte un tipo de coche válido! </h3></br>";
        break;
}

function coche_grande(){
    for ($i=0; $i<count($_SESSION['plazasGrandes']); $i++){
        if ($_SESSION['plazasGrandes'][$i] == 0) {
            $_SESSION['plazasGrandes'][$i] = 1;
            return true;
        }
    }

    return false;
}

function coche_pequeño(){
    for ($i=0; $i<count($_SESSION['plazasPequeñas']); $i++){
        if ($_SESSION['plazasPequeñas'][$i] == 0) {
            $_SESSION['plazasPequeñas'][$i] = 1;
            return true;
        }
    }

    for ($i=0; $i<count($_SESSION['plazasGrandes']); $i++){
        if ($_SESSION['plazasGrandes'][$i] == 0) {
            $_SESSION['plazasGrandes'][$i] = 1;
            return true;
        }
    }

    return false;
}

function ticket($aparcado){
    if ($aparcado) {
        echo "<h3 style='color: green;'> Enhorabuena, tu coche ha sido aparcado con éxito. </h3></br>";
    } else {
        echo "<h3 style='color: red;'> Lo sentimos, en estos momentos el parking está completo. </h3></br>";
    }
}

?>

<form action="formulario.html" method="post">
    <input type="submit" value="Volver al inicio">
</form>


<!-- <form action="<?php echo ($variableCondicion == 'condicion1') ? 'archivo1.html' : 'archivo2.html'; ?>" method="post">
    <input type="submit" value="Ir al Formulario HTML">
</form> -->
