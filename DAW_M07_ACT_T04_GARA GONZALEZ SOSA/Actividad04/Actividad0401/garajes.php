<?php
session_start();

$operacion = "";
if(isset($_POST["operacion"])){
    $operacion = $_POST["operacion"];
}

switch ($operacion) {
    case "aparcar":
        header('Location: aparcar.html');
        exit();
    case "retirar":
        header('Location: retirar.html');
        exit();
    case "visualizar":
        header('Location: visualizar.php');
        exit();
    default:
        echo "<h3 style='color: red;'> Por favor inserte una operación válida! </h3></br>";
        break;
}

?>

<form action="formulario.html" method="post">
    <input type="submit" value="Volver al inicio">
</form>
