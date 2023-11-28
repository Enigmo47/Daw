<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio PHP</title>
</head>
<body>
<?php
// 1 y 2) Definir variables y visualizar sus valores
$nombre = "Eric";
$apellidos = "Sierra";
echo 'Mi nombre es "'.$nombre.'" y mi apellido es "'.$apellidos.'"<br>';

// 3) Con echo pasando varios argumentos (separados por coma)
echo '1) Con echo: Mi nombre es "', $nombre, '" y mi apellido es "', $apellidos, '"<br>';

// 4) Con print
print '2) Con print: Mi nombre es "'.$nombre.'" y mi apellido es "'.$apellidos.'"<br>';

// 5) Diferencias entre echo y print
/*
    - Echo puede tomar múltiples parámetros, mientras que print puede tomar solo uno.
    - Echo es un poco más rápido que print.
    - Echo no devuelve ningún valor, mientras que print devuelve 1, por lo que se puede usar en expresiones.
*/

// 6) Puedes pasar los argumentos sin usar paréntesis porque echo es un lenguaje constructivo.

// 7) Sintaxis heredoc
$informe = <<<FIN
Línea 1 del informe
Línea 2 del informe
Línea 3 del informe
Línea 4 del informe
Línea 5 del informe
FIN;

echo $informe;

// 8 al 19) Probando variables
$variable = "Hola";
echo "<br><br>Variable inicial: $variable (tipo: " . gettype($variable) . ")<br>";

$variable = true;
echo "Variable booleana: $variable (tipo: " . gettype($variable) . ")<br>";

$variable = 3.14;
echo "Variable float: $variable (tipo: " . gettype($variable) . ")<br>";

$variable = "Cadena de texto";
echo "Variable string: $variable (tipo: " . gettype($variable) . ")<br>";

$variable = null;
echo "Variable null: $variable (tipo: " . gettype($variable) . ")<br>";

// 20) Visualiza el código ASCII del valor 64 al 122 en carácter
for ($i = 64; $i <= 122; $i++) {
    echo "ASCII $i: " . chr($i) . "<br>";
}

// 21) Visualizar el contenido de la función time()
echo "<br>Timestamp actual (time()): " . time() . "<br>";

// 22) Obtener la fecha actual con formato día-mes-año en números
$fechaActual = date("d-m-Y");
echo "Fecha actual: $fechaActual<br>";

// 23, 24, y 25) Obtener los días, horas y minutos transcurridos desde el 1/1/1970
$diasTranscurridos = floor(time() / (60 * 60 * 24));
$horasTranscurridas = floor(time() / (60 * 60));
$minutosTranscurridos = floor(time() / 60);
echo "Días transcurridos desde 1/1/1970: $diasTranscurridos<br>";
echo "Horas transcurridas desde 1/1/1970: $horasTranscurridas<br>";
echo "Minutos transcurridos desde 1/1/1970: $minutosTranscurridos<br>";

// 26 a 28) Usando la función setlocale(...) y strftime(...)
setlocale(LC_TIME, 'es_ES.UTF-8');

echo "Fecha actual en español: " . strftime("%A, %e de %B de %Y") . "<br>";
echo "Fecha actual en inglés: " . strftime("%A, %e %B %Y") . "<br>";
echo "Fecha actual en francés: " . strftime("%A, %e %B %Y", strtotime('now', 0)) . "<br>";

// 29 y 30) Calcular edad
$fechaNacimiento = "2003-07-20";
$edad = floor((time() - strtotime($fechaNacimiento)) / (365.25 * 24 * 60 * 60));
echo "<br>Edad actual: $edad años<br>";

// 31-32) Edad desde una fecha específica
$fechaEspecifica = "1969-10-30";
$edadEspecifica = [
    'años' => floor((time() - strtotime($fechaEspecifica)) / (365.25 * 24 * 60 * 60)),
    'meses' => floor((time() - strtotime($fechaEspecifica)) / (30 * 24 * 60 * 60)),
    'días' => floor((time() - strtotime($fechaEspecifica)) / (24 * 60 * 60)),
];
echo "<br>Edad desde 30/10/1969:<br>";
echo "Años: {$edadEspecifica['años']}<br>";
echo "Meses: {$edadEspecifica['meses']}<br>";
echo "Días: {$edadEspecifica['días']}<br>";

// 33-36) Función getdate(...)
$informacionFecha = getdate();
print_r($informacionFecha);
echo "<br>";

$informacionFecha1 = getdate(1);
print_r($informacionFecha1);
echo "<br>";

// 37-64) Código obtenido de http://php.net/manual/es/function.strtotime.php
echo "<hr>";
echo strtotime("now"), "<br/>";
echo date('d-m-Y', strtotime("now")), "<br/>";
echo strtotime("27 September 1970"), "<br/>";
echo date('d-m-Y', strtotime("10 September 2000")), "<br/>";
echo strtotime("+1 day"), "<br/>";
echo date('d-m-Y', strtotime("+1 day")), "<br/>";
echo strtotime("+1 week"), "<br/>";
echo date('d-m-Y', strtotime("+1 week")), "<br/>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br/>";
echo date('d-m-Y', strtotime("+1 week 2 days 4 hours 2 seconds")), "<br/>";
echo strtotime("next Thursday"), "<br/>";
echo date('d-m-Y', strtotime("next Thursday")), "<br/>";
echo strtotime("last Monday"), "<br/>";
echo date('d-m-Y', strtotime("last Monday")), "<br/>";
echo "<hr>";
?>
 
</body>
</html>
