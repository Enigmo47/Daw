<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="agenda de Eric" content="width=device-width, initial-scale=1.0">
    <title>Agenda en PHP</title>
</head>
<body>

<?php
// Inicializar la agenda como un array
$agenda = [];

// Función para mostrar la agenda
function mostrarAgenda($agenda) {
    echo "<h2>Agenda</h2>";
    if (empty($agenda)) {
        echo "<p>No hay contactos en la agenda.</p>";
    } else {
        echo "<ul>";
        foreach ($agenda as $nombre => $telefono) {
            echo "<li>$nombre: $telefono</li>";
        }
        echo "</ul>";
    }
}

// Función para validar y procesar el formulario
function procesarFormulario($agenda) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['nombre'])) {
            echo "<p style='color: red;'>¡Advertencia! El nombre no puede estar vacío.</p>";
        } elseif (!is_numeric($_POST['telefono']) && !empty($_POST['telefono'])) {
            echo "<p style='color: red;'>¡Advertencia! El teléfono debe ser numérico.</p>";
        } else {
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];

            if (array_key_exists($nombre, $agenda)) {
                if (empty($telefono)) {
                    // Eliminar la entrada si no se proporciona un teléfono
                    unset($agenda[$nombre]);
                    echo "<p>¡Eliminado! Se eliminó el contacto de $nombre.</p>";
                } else {
                    // Actualizar el número de teléfono
                    $agenda[$nombre] = $telefono;
                    echo "<p>¡Actualizado! Se actualizó el número de teléfono para $nombre.</p>";
                }
            } elseif (!empty($telefono)) {
                // Añadir nuevo contacto
                $agenda[$nombre] = $telefono;
                echo "<p>¡Añadido! Se añadió el contacto de $nombre.</p>";
            }
        }
    }
}

// Procesar el formulario
procesarFormulario($agenda);

// Mostrar la agenda
mostrarAgenda($agenda);

// Habilitar o deshabilitar el botón de borrar según la presencia de contactos en la agenda
$botonDeshabilitado = empty($agenda) ? "disabled" : "";

?>

<!-- Formulario -->
<form method="post">
    <h2>Formulario</h2>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono">
    <br>
    <button type="submit">Guardar</button>
</form>

<!-- Botón para borrar contactos -->
<form method="post">
    <h2>Borrar Contactos</h2>
    <button type="submit" name="borrar" <?php echo $botonDeshabilitado; ?>>Borrar Todos los Contactos</button>
</form>

<?php
// Procesar la acción de borrar contactos
if (isset($_POST['borrar'])) {
    $agenda = []; // Limpiar la agenda
    echo "<p>¡Borrados! Se eliminaron todos los contactos de la agenda.</p>";
}
?>

</body>
</html>
