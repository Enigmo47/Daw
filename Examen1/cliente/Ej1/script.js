// Función para generar un array de números aleatorios
function generarNumerosAleatorios(cantidad, min, max) {
    var numeros = [];
    for (var i = 0; i < cantidad; i++) {
      numeros.push(Math.floor(Math.random() * (max - min + 1)) + min);
    }
    return numeros;
  }
  
  // Función para filtrar números pares de un array y ordenarlo
  function filtrarYOrdenarNumeros(numeros) {
    return numeros.filter(numero => numero % 2 !== 0).sort((a, b) => a - b);
  }
  
  // Generar un array de 10 números aleatorios entre 1 y 100
  var numerosAleatorios = generarNumerosAleatorios(10, 1, 100);
  
  // Filtrar los números pares y ordenarlos
  var numerosImparesOrdenados = filtrarYOrdenarNumeros(numerosAleatorios);
  
  // Mostrar los números en la página
  var numerosAleatoriosDiv = document.getElementById('numerosAleatorios');
  numerosAleatoriosDiv.innerHTML = "<p>Números Aleatorios: " + numerosAleatorios.join(", ") + "</p>";
  numerosAleatoriosDiv.innerHTML += "<p>Números Impares Ordenados: " + numerosImparesOrdenados.join(", ") + "</p>";
  