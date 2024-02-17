function crearObjeto() {
    let cuenta = false;
    while(!cuenta){
    var saldo = prompt("Introduce saldo de la cuenta:");
    if(!isNaN (saldo)){
        if(saldo>= 1){
            var nombre = prompt("Introduce nombre del titular:");
            var apellidos = prompt("Introduce apellidos del titular:");
            cuenta = true;
        }
        else{
            alert("Al menos debe darle valor de 1 al saldo")
        }

    }
    else{
        alert("Por favor introduzca un saldo a la cuenta");
    }
    }

  
    var cuentaBancaria = {
      nombre: nombre,
      apellidos: apellidos,
      saldo: saldo
    };
  
    mostrarDatosCuenta(cuentaBancaria);
  }
  
  function mostrarDatosCuenta(cuentaBancaria) {
    var mensaje = "Nombre: " + cuentaBancaria.nombre + "\n" +
                 "Apellidos: " + cuentaBancaria.apellidos + "\n" +
                 "Saldo: " + cuentaBancaria.saldo + "\n"
  
    alert(mensaje);
  }
  