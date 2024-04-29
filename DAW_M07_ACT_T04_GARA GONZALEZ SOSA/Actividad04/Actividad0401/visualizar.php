<?php
session_start();

echo "<h2>Plazas Grandes</h2>";
for ($i=0; $i<count($_SESSION['plazasGrandes']); $i++){
    if ($_SESSION['plazasGrandes'][$i] == 0) {
        echo "<p style='color: green;'>Plaza ".$i." => Libre</p>";
    } else {
        echo "<p style='color: red;'>Plaza ".$i." => Ocupada</p>";
    }
}

echo "</br>";
echo "<h2>Plazas Pequeñas</h2>";
for ($i=0; $i<count($_SESSION['plazasPequeñas']); $i++){
    if ($_SESSION['plazasPequeñas'][$i] == 0) {
        echo "<p style='color: green;'>Plaza ".$i." => Libre</p>";
    } else {
        echo "<p style='color: red;'>Plaza ".$i." => Ocupada</p>";
    }
}

echo "</br>";
?>

<form action="formulario.html" method="post">
    <input type="submit" value="Volver al inicio">
</form>
