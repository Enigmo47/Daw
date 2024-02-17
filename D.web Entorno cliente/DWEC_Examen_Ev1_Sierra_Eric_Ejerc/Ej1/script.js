document.addEventListener('DOMContentLoaded', function () {
// Función para generar un array de números aleatorios
function generarNumerosAleatorios(cantidad, min, max) {
    var numeros = [];
    for (var i = 0; i < cantidad; i++) {
      numeros.push(Math.floor(Math.random() * (max - min)) + min);
    }
    return numeros;
  }

  //funcion para filtrar números pares
function filtrarNum(numeros){
    var numerosquince = []
  for(var i = 0; i< 15; i++){
      numerosquince = numeros.filter((numero => numero % 2 == 0) && (numero => numero % 3 == 0));
  }
  return numerosquince;
}

// Función para filtrar números pares de un array y ordenarlo
function filtrarYOrdenarNumeros(numeros) {
  return numeros.filter(numero => numero % 2 !== 0).sort((a, b) => a - b);
}

// Generar un array de 10 números aleatorios entre 1 y 100
var numerosAleatorios = generarNumerosAleatorios(50, 20, 100);
// Filtrar los 15 primeros
var numerosPares = filtrarNum(numerosAleatorios);

// Filtrar los números pares y ordenarlos
var numerosImparesOrdenados = filtrarYOrdenarNumeros(numerosAleatorios);


function mostrarWeb(array, mensaje, elementoHTML) {
    elementoHTML.innerHTML = `<p><strong>${mensaje}</strong>: ${array.join('/ ')}</p>`;
}
// Mostrar los números en alertas

let primeros = document.getElementById('primeros');
mostrarWeb( numerosPares," ", primeros);

let impar = document.getElementById('impares');
mostrarWeb(numerosImparesOrdenados," Impar: ", impar);

//alert("Números Aleatorios: " + numerosAleatorios.join("/ "));
//alert("Números Impares Ordenados: " + numerosImparesOrdenados.join("/ "));
});