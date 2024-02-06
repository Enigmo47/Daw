<?php
session_start();

// Función para generar la clave aleatoria
function generateSecretCode() {
    // Definimos los colores disponibles
    $colors = array('red', 'blue', 'green', 'yellow', 'orange', 'purple');
    $code = array();
    // Generamos la clave de 4 colores aleatorios
    for ($i = 0; $i < 4; $i++) {
        $randomIndex = array_rand($colors);
        $code[] = $colors[$randomIndex];
    }
    return $code;
}

// Función para comparar las jugadas con la clave
function compareCodes($secretCode, $attempt) {
    $result = array('exact' => 0, 'partial' => 0);
    // Creamos copias de los códigos para no modificar los originales
    $secretCodeCopy = $secretCode;
    $attemptCopy = $attempt;
    // Primero buscamos los colores exactos en las posiciones correctas
    for ($i = 0; $i < 4; $i++) {
        if ($secretCodeCopy[$i] == $attemptCopy[$i]) {
            $result['exact']++;
            // Marcamos los colores encontrados para no contarlos como parciales
            $secretCodeCopy[$i] = null;
            $attemptCopy[$i] = null;
        }
    }
    // Luego buscamos los colores correctos en posiciones incorrectas
    for ($i = 0; $i < 4; $i++) {
        if ($attemptCopy[$i] != null && ($key = array_search($attemptCopy[$i], $secretCodeCopy)) !== false) {
            $result['partial']++;
            // Marcamos los colores encontrados para no contarlos más de una vez
            $secretCodeCopy[$key] = null;
        }
    }
    return $result;
}

// Inicializamos el juego si no está en sesión
if (!isset($_SESSION['game'])) {
    $_SESSION['game'] = array(
        'secretCode' => generateSecretCode(),
        'attempts' => array(),
        'triesLeft' => 15
    );
}

// Manejamos las acciones del juego
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['action']) {
        case 'play':
            // Realizamos la jugada
            $currentAttempt = array(
                'code' => array($_POST['color1'], $_POST['color2'], $_POST['color3'], $_POST['color4']),
                'result' => compareCodes($_SESSION['game']['secretCode'], array($_POST['color1'], $_POST['color2'], $_POST['color3'], $_POST['color4']))
            );
            $_SESSION['game']['attempts'][] = $currentAttempt;
            $_SESSION['game']['triesLeft']--;

            // Verificar si ha adivinado la clave
            if ($currentAttempt['result']['exact'] === 4) {
                echo json_encode(array('win' => true, 'attempts' => $_SESSION['game']['attempts']));
                exit;
            }
            break;
        case 'showCode':
            // Mostrar la clave
            echo json_encode($_SESSION['game']['secretCode']);
            exit;
            break;
        case 'showHistory':
            // Mostrar historial de jugadas
            echo json_encode($_SESSION['game']['attempts']);
            exit;
            break;
    }
}
// Mostrar la interfaz de juego
function showGameInterface() {
    echo '<div id="game">';
    echo '<h2>Selecciona tus colores:</h2>';
    echo '<select id="color1">';
    echo '<option value="red">Rojo</option>';
    echo '<option value="blue">Azul</option>';
    echo '<option value="green">Verde</option>';
    echo '<option value="yellow">Amarillo</option>';
    echo '<option value="orange">Naranja</option>';
    echo '<option value="purple">Morado</option>';
    echo '</select>';

    echo '<select id="color2">';
    echo '<option value="red">Rojo</option>';
    echo '<option value="blue">Azul</option>';
    echo '<option value="green">Verde</option>';
    echo '<option value="yellow">Amarillo</option>';
    echo '<option value="orange">Naranja</option>';
    echo '<option value="purple">Morado</option>';
    echo '</select>';

    echo '<select id="color3">';
    echo '<option value="red">Rojo</option>';
    echo '<option value="blue">Azul</option>';
    echo '<option value="green">Verde</option>';
    echo '<option value="yellow">Amarillo</option>';
    echo '<option value="orange">Naranja</option>';
    echo '<option value="purple">Morado</option>';
    echo '</select>';

    echo '<select id="color4">';
    echo '<option value="red">Rojo</option>';
    echo '<option value="blue">Azul</option>';
    echo '<option value="green">Verde</option>';
    echo '<option value="yellow">Amarillo</option>';
    echo '<option value="orange">Naranja</option>';
    echo '<option value="purple">Morado</option>';
    echo '</select>';

    echo '<button onclick="play()">Jugar</button>';
    echo '</div>';
}

// Mostrar el resultado de la jugada
function showResult($result) {
    echo '<div id="result">';
    echo '<h2>Resultado:</h2>';
    echo '<p>Colores en posición correcta: ' . $result['exact'] . '</p>';
    echo '<p>Colores correctos en posición incorrecta: ' . $result['partial'] . '</p>';
    echo '</div>';
}

// Mostrar el historial de jugadas
function showHistory($attempts) {
    echo '<div id="history">';
    echo '<h2>Historial de Jugadas:</h2>';
    echo '<ul>';
    foreach ($attempts as $attempt) {
        echo '<li>';
        echo implode(', ', $attempt['code']) . ' - ';
        echo 'Exactos: ' . $attempt['result']['exact'] . ', Parciales: ' . $attempt['result']['partial'];
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
}

// Mostrar la clave
function showSecretCode($code) {
    echo '<div id="secret-code">';
    echo '<h2>Clave:</h2>';
    echo '<p>' . implode(', ', $code) . '</p>';
    echo '</div>';
}

// Verificar si el juego ha terminado
function checkGameOver($attempts) {
    return count($attempts) >= 15;
}

// Mostrar el juego completo
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
