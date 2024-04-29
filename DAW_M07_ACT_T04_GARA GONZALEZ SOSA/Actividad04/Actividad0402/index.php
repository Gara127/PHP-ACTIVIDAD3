<!DOCTYPE html>
<html>
    <head>
        <title>GGS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, userscalable=true, initial-scale=1.0, maximum-scale=3.0, minimumscale=1.0">
    </head>
    <body>
        <?php
            include("./personaje.php");
            include("./mago.php");
            include("./guerrero.php");
            include("./explorador.php");

            // Crear y almacenar personajes en un array
            $personajes = array();
            $personajes[0] = new Mago("Mago1", "Elfo", 150, 10, 15);
            $personajes[1] = new Guerrero("Guerrero1", "Humano", 100, 20, 5);
            $personajes[2] = new Explorador("Explorador1", "Enano", 120, 15, 8);

            // Mostrar información y calcular puntos para cada personaje
            foreach ($personajes as $personaje) {
                echo "Nombre: " . $personaje->getNombre() . "<br>";
                echo "Especie: " . $personaje->getEspecie() . "<br>";
                echo "Experiencia: " . $personaje->getExperiencia() . "<br>";
                echo "Puntos: " . $personaje->calcularPuntos() . "<br>";
                echo "<br>";
            }
        ?>
    </body>
</html> 