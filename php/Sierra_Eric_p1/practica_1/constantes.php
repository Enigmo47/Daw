<?php
// Define la constante de edad
define('EDAD', 20);

// Calcula los años que te faltan para cumplir 100 años


// Muestra los resultados
echo "Tengo " . EDAD . " años.<br>";
echo "Te faltan " . (EDAD - 100) . " años para cumplir 100 años.<br>";

// Espera 2 segundos antes de redirigir
sleep(2);

// Redirige a index.php
header("Location: index.php");
exit;
?>
