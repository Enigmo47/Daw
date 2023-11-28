<?php
// Obtener un número aleatorio entre 1 y 1000
$numero = mt_rand(1, 1000);

// Determinar si el número es par o impar usando el operador ternario
$mensaje = ($numero % 2 === 0) ? "El número es par" : "El número es impar";

// Mostrar el resultado
echo "Número: $numero<br>";
echo $mensaje . "<br>";

// Esperar 2 segundos antes de redirigir
sleep(2);

// Redirigir a index.php
header("Location: index.php");
exit;
?>
