TxtApellido = document.getElementById("Apellidos");
InfoApellido = document.getElementById("InfoApellido");
ApellidoValido = false;
RegExApellido = /^([A-Za-z ñáéíóú ÑÁÉÍÓÚ]{2,20})$/;

function ValidarApellido(){
	
	if (TxtApellido.value.match(RegExApellido) && TxtApellido.value != ""){
		InfoApellido.innerHTML = "Correcto.";
		TxtApellido.style.borderColor = "rgba(0,200,130,0.5)";
		ApellidoValido = true;
	}
	else if (TxtApellido.value == ""){
		InfoApellido.innerHTML = "Ingrese su(s) apellido(s).";
		TxtApellido.style.borderColor = "rgba(255,0,0,0.5)";
		ApellidoValido = false;
	}
	else{
		InfoApellido.innerHTML = "El formato del/los apellido(s) no es correcto, no debe contener números " +
		"ni caracteres especiales (excepto acentos).";
		TxtApellido.style.borderColor = "rgba(255,0,0,0.5)";
		ApellidoValido = false;
	}
	
}