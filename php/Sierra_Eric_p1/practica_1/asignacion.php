<?php
// Definir la variable
$a = null;

// Asignar a la variable valores de diferente procedencia
// y visualizar los valores especificando su procedencia

// Un valor constante numérico
$a = 9;
echo "Valor a: $a (procedencia: constante numérica)<br>";

// Un valor constante string
$a = 'Hola, mundo!';
echo "Valor a: $a (procedencia: constante string)<br>";

// Un valor constante numérica con valor hexadecimal
$a = 0x1A;
echo "Valor a: $a (procedencia: constante numérica hexadecimal)<br>";

// Un valor constante numérica con valor binario
$a = 0b1101;
echo "Valor a: $a (procedencia: constante numérica binaria)<br>";

// Un valor de una expresión numérica
$a = 3 * (8 + 2);
echo "Valor a: $a (procedencia: expresión numérica)<br>";

// Un valor de una expresión de cadena de caracteres
$a = "Hola" . " " . "mundo";
echo "Valor a: $a (procedencia: expresión de cadena de caracteres)<br>";

// Un valor que devuelva una función (por ejemplo, la función print)
ob_start();
$a = print("Este es un mensaje");
ob_end_clean();
echo "Valor a: $a (procedencia: resultado de la función print)<br>";

// El valor de una expresión que sea una asignación
$variableTemporal = 42;
$a = ($variableTemporal = 20 + 5);
echo "Valor a: $a (procedencia: resultado de una asignación)<br>";

// Esperar 5 segundos antes de redirigir
sleep(5);

// Redirigir a index.php
header("Location: index.php");
exit; 
?>
