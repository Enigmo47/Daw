<?php
// Definir dos arrays bidimensionales
$array1 = array(
    array("Juan", "25", "Madrid"),
    array("María", "30", "Barcelona"),
    array("Pedro", "28", "Valencia")
);

$array2 = array(
    array("Luis", "27", "Sevilla"),
    array("Ana", "32", "Bilbao"),
    array("Elena", "29", "Málaga")
);

// Inicializar un nuevo array para almacenar los datos combinados
$nuevoArray = array();

// Combinar los elementos de los dos arrays
foreach ($array1 as $item1) {
    foreach ($array2 as $item2) {
        // Agregar elementos al nuevo array
        $nuevoArray[] = array_merge($item1, $item2);
    }
}

// Mostrar la tabla HTML
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Edad</th><th>Ciudad</th></tr>";
foreach ($nuevoArray as $item) {
    echo "<tr>";
    foreach ($item as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
