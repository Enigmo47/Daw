document.addEventListener('DOMContentLoaded', function () {
    // Función para generar números aleatorios entre 0 y 10
    function generarNumeroAleatorio() {
        return Math.floor(Math.random() * 11);
    }

    // Crear un array con 10 números aleatorios entre 0 y 10
    let numeros = Array.from({ length: 10 }, generarNumeroAleatorio);

    console.log('Números generados:', numeros);

    // Filtrar los números menores de 8
    let menoresDe8 = numeros.filter(function (numero) {
        return numero < 8;
    });

    console.log('Menores de 8:', menoresDe8);

    // Mostrar "impar" en lugar del número para los números impares
    let imparesComoTexto = numeros.map(function (numero) {
        return numero % 2 !== 0 ? 'impar' : numero;
    });

    console.log('Impares como texto:', imparesComoTexto);
});
