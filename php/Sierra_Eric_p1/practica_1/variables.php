<?php
// Asignación de valores a variables
$valorA = 125;
// La siguiente asignación producirá un error porque el 8 no es válido en sistema octal
// $valorB = 0874; // Comentado para evitar el error

// Asignación de valor válido después de la observación
$valorB = 0123; // Valor octal válido

$valorC = 14758525;
$valorD = 0b111001;
$valorE = "Esto es una cadena de caracteres";
$valorF = 'Esto es otra cadena de caracteres';

$valorG = "Esto es una cadena
multilínea
y no termina aquí,
lo hace aquí";

$valorH = 'Esto no es una cadena';

$valorI = 3.14159265358979323846;
$valorJ = 1234E-2;
$valorK = null;
$valorL = true;
$valorM = false;

// Visualización de los valores
print "Valor A: $valorA <br>";
print "Valor B: $valorB <br>";
print "Valor C: $valorC <br>";
print "Valor D: $valorD <br>";
print "Valor E: $valorE <br>";
print "Valor F: $valorF <br>";
print "Valor G: $valorG <br>";
print "Valor H: $valorH <br>";
print "Valor I: $valorI <br>";
print "Valor J: $valorJ <br>";
print "Valor K: $valorK <br>";
print "Valor L: $valorL <br>";
print "Valor M: $valorM <br>";

// Espera 5 segundos antes de redirigir
sleep(5);

// Redirección a index.php
header("Location: index.php");
exit;
?>
