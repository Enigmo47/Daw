function crearObjeto() {
    var nombre = document.getElementById('nombre').value;
    var apellido1 = document.getElementById('apellido1').value;
    var apellido2 = document.getElementById('apellido2').value;
    var saludo = document.getElementById('saludo').value;
  
    var persona = {
      nombre: nombre,
      apellido1: apellido1,
      apellido2: apellido2,
      saludo: saludo
    };
  
    mostrarDatosPersona(persona);
  }
  
  function mostrarDatosPersona(persona) {
    var datosPersonaDiv = document.getElementById('datosPersona');
    datosPersonaDiv.innerHTML = "<p>Nombre: " + persona.nombre + "</p>";
    datosPersonaDiv.innerHTML += "<p>Primer Apellido: " + persona.apellido1 + "</p>";
    datosPersonaDiv.innerHTML += "<p>Segundo Apellido: " + persona.apellido2 + "</p>";
    datosPersonaDiv.innerHTML += "<p>Saludo: " + persona.saludo + "</p>";
  }
  