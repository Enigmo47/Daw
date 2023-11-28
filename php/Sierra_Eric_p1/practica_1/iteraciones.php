<?php
// Inicializar la variable de la suma
$suma = 0;

// Sumar los primeros 100 números pares
for ($i = 2; $i <= 200; $i += 2) {
    $suma += $i;
}

// Mostrar el resultado de la suma
echo "La suma de los primeros 100 números pares es: $suma<br>";

// Esperar 2 segundos antes de redirigir
sleep(2);

// Redirigir a index.php
header("Location: index.php");
exit;
?>
