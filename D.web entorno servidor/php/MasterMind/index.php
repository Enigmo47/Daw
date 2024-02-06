<?php
session_start();
include('game.php'); // Incluye la lógica del juego

// Resto del contenido de index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastermind</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Mastermind</h1>
        
        <?php
        // Verificar si el juego ha terminado
        if (isset($_SESSION['game'])) {
            // Si el juego no ha terminado, mostrar la interfaz de juego
            if (!checkGameOver($_SESSION['game']['attempts']) && !isset($_POST['action'])) {
                showGameInterface();
            } else {
                // Si el juego ha terminado, mostrar la clave, el resultado y el historial
                showSecretCode($_SESSION['game']['secretCode']);
                if (isset($_POST['action']) && $_POST['action'] === 'play') {
                    showResult(end($_SESSION['game']['attempts'])['result']);
                }
                showHistory($_SESSION['game']['attempts']);
            }
        }
        ?>
    </div>
</body>
</html>
