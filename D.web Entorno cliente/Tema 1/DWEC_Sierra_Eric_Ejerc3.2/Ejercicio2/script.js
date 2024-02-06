document.addEventListener('DOMContentLoaded', function () {
    // Función para mostrar un array en la consola y en la página web
    function mostrarArrayEnConsolaYWeb(array, mensaje, elementoHTML) {
        console.log(mensaje, array);
        elementoHTML.innerHTML = `<p><strong>${mensaje}</strong>: ${array.join(', ')}</p>`;
    }

    // Función para calcular el producto de los elementos de un array
    function productoDeArray(array) {
        return array.reduce(function (producto, valor) {
            return producto * valor;
        }, 1);
    }

    // Crear un vector con 5 valores numéricos (positivos y negativos)
    let valoresNumericos = [2, -5, 7, -3, 4];

    // Mostrar valores originales en la consola y en la página web
    let originalValuesElement = document.getElementById('originalValues');
    mostrarArrayEnConsolaYWeb(valoresNumericos, 'Valores numéricos originales', originalValuesElement);

    // Filtrar y mostrar solo los números negativos
    let numerosNegativos = valoresNumericos.filter(function (valor) {
        return valor < 0;
    });

    // Mostrar números negativos en la consola y en la página web
    let negativeNumbersElement = document.getElementById('negativeNumbers');
    mostrarArrayEnConsolaYWeb(numerosNegativos, 'Números negativos', negativeNumbersElement);

    // Obtener el triple de los valores
    let tripleDeValores = valoresNumericos.map(function (valor) {
        return valor * 3;
    });

    // Mostrar el triple de los valores en la consola y en la página web
    let tripleValuesElement = document.getElementById('tripleValues');
    mostrarArrayEnConsolaYWeb(tripleDeValores, 'Triple de los valores', tripleValuesElement);

    // Calcular el producto de los valores triples
    let productoTriple = productoDeArray(tripleDeValores);

    // Mostrar el producto en la consola y en la página web
    let productTripleElement = document.getElementById('productTriple');
    console.log('Producto de los valores triples:', productoTriple);
    productTripleElement.innerHTML = `<p><strong>Producto de los valores triples</strong>: ${productoTriple}</p>`;
});
