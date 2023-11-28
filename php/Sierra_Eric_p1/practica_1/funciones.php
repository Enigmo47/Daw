<?php
// Función que duplica el valor de $a y $b, y devuelve el valor mayor de los dos
function duplicarYMayor(&$a, $b) {
    $a *= 2;
    $b *= 2;
    return max($a, $b);
}

// Programa principal
$a = 5;
$b = 8;

// Visualizar los valores iniciales
echo "Valores iniciales: \$a = $a, \$b = $b <br>";

// Invocar a la función y visualizar los valores después de la llamada
$resultado = duplicarYMayor($a, $b);
echo "Valores después de la llamada a la función: \$a = $a, \$b = $b <br>";

// Realizar el proceso especificado y visualizar los valores finales
echo "Resultado de duplicar y obtener el mayor: $resultado <br>";
echo "Valores finales: \$a = $a, \$b = $b <br>";

// Variable global igual al segundo parámetro de la función
$variableGlobal = $b;

// Visualizar el valor de la variable global
echo "Valor de la variable global: \$variableGlobal = $variableGlobal <br>";
sleep(5);

// Redirigir a index.php
header("Location: index.php");
exit; 
?>
