function actualizarReloj() {
    var fechaActual = new Date();
    var hora = agregarCeroAlInicio(fechaActual.getHours());
    var minutos = agregarCeroAlInicio(fechaActual.getMinutes());
    var segundos = agregarCeroAlInicio(fechaActual.getSeconds());
    var horaCompleta = hora + ":" + minutos + ":" + segundos;
    document.getElementById('Hora').innerText = ("Hora: " + horaCompleta);
  }
  
  function agregarCeroAlInicio(numero) {
    return numero < 10 ? "0" + numero : numero;
  }
  
  function actualizarFecha() {
    var fechaActual = new Date();
    var dia = agregarCeroAlInicio(fechaActual.getDate());
    var mes = agregarCeroAlInicio(fechaActual.getMonth() + 1);
    var año = fechaActual.getFullYear();
    var fechaCompleta = dia + "/" + mes + "/" + año;
    document.getElementById('Fecha').innerText =("Fecha: " + fechaCompleta);
  }
  setInterval(actualizarReloj, 1000);
  actualizarReloj();
  actualizarFecha();
  