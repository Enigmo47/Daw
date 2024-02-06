<?php
// Función para sumar dos números
function suma($a, $b) {
    return $a + $b;
}

// Función para restar dos números
function resta($a, $b) {
    return $a - $b;
}

// Función para multiplicar dos números
function multiplicar($a, $b) {
    return $a * $b;
}

// Función para dividir dos números
function dividir($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Error: División por cero";
    }
}

// Función para calcular el cuadrado de un número
function cuadrado($a) {
    return $a * $a;
}

// Función para calcular la raíz cuadrada de un número
function raizCuadrada($a) {
    if ($a >= 0) {
        return sqrt($a);
    } else {
        return "Error: No se puede calcular la raíz de un número negativo";
    }
}

// Ejemplos de uso de las funciones
echo "Suma: " . suma(5, 3) . "<br>";
echo "Resta: " . resta(10, 4) . "<br>";
echo "Multiplicación: " . multiplicar(6, 2) . "<br>";
echo "División: " . dividir(8, 2) . "<br>";
echo "Intento de división por cero: " . dividir(10, 0) . "<br>";
echo "Cuadrado de 4: " . cuadrado(4) . "<br>";
echo "Raíz cuadrada de 9: " . raizCuadrada(9) . "<br>";
echo "Intento de calcular la raíz de -4: " . raizCuadrada(-4) . "<br>";
?>
