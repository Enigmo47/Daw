<?php
// Generar una edad aleatoria entre 1 y 150 años
$edad = mt_rand(1, 150);

// Determinar la categoría de edad usando un switch
$categoria = "";
switch (true) {
    case ($edad >= 0 && $edad <= 11):
        $categoria = "Niño";
        break;
    case ($edad >= 12 && $edad <= 17):
        $categoria = "Adolescente";
        break;
    case ($edad >= 18 && $edad <= 35):
        $categoria = "Joven";
        break;
    case ($edad >= 36 && $edad <= 65):
        $categoria = "Adulto";
        break;
    case ($edad >= 66):
        $categoria = "Jubilado";
        break;
    default:
        $categoria = "Edad no contemplada en nuestra encuesta";
}

// Mostrar el resultado
echo "Tu edad es $edad años. Eres categoría: $categoria <br>";

// Esperar 2 segundos antes de redirigir
sleep(2);

// Redirigir a index.php
header("Location: index.php");
exit;
?>
