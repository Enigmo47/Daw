document.addEventListener('DOMContentLoaded', function () {
    // Array de letras para el cálculo del DNI
    let letrasDNI = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];

    // Función para calcular la letra del DNI
    function calcularLetraDNI(numeroDNI) {
        let resto = numeroDNI % 23;
        return letrasDNI[resto];
    }

    // Función para validar y mostrar el resultado en una ventana emergente
    function validarDNI() {
        let dniCorrecto = false;

        while (!dniCorrecto) {
            // Solicitar al usuario que ingrese el DNI
            let numeroDNI = prompt('Introduce el número de DNI (sin la letra):');

            // Validar que el input sea un número
            if (!isNaN(numeroDNI)) {
                // Convertir el input a número entero
                numeroDNI = parseInt(numeroDNI, 10);

                // Validar que el número esté en el rango correcto
                if (numeroDNI >= 0 && numeroDNI <= 99999999) {
                    // Calcular la letra del DNI
                    let letraCalculada = calcularLetraDNI(numeroDNI);

                    // Solicitar al usuario que ingrese la letra calculada
                    let letraIngresada = prompt(`La letra del DNI es: ${letraCalculada}. Ingresa la letra:`);

                    // Validar que la letra ingresada sea correcta
                    if (letraIngresada.toUpperCase() === letraCalculada) {
                        dniCorrecto = true;
                        alert('DNI válido. ¡Correcto!');
                    } else {
                        alert('La letra ingresada no es correcta. Por favor, inténtalo de nuevo.');
                    }
                } else {
                    alert('El número de DNI debe estar entre 0 y 99999999. Por favor, inténtalo de nuevo.');
                }
            } else {
                alert('Por favor, ingresa un número válido.');
            }
        }
    }

    // Llamar a la función de validación al cargar la página
    validarDNI();
});
