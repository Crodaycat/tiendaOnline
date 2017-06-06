TxtNombre = document.getElementById("Nombre");
InfoNombre = document.getElementById("InfoNombre");
NombreValido = false;
RegExNombre = /^([A-Za-z ñáéíóú ÑÁÉÍÓÚ]{2,20})$/;

function ValidarNombre(){
	
	if(TxtNombre.value.match(RegExNombre) && TxtNombre.value != ""){
		InfoNombre.innerHTML = "Correcto.";
		TxtNombre.style.borderColor = "rgba(0,200,130,0.5)";
		NombreValido = true;
	}
	else if (TxtNombre.value == ""){
		InfoNombre.innerHTML = "Ingrese su(s) nombre(s).";
		TxtNombre.style.borderColor = "rgba(255,0,0,0.5)";
		NombreValido = false;
	}
	else{
		InfoNombre.innerHTML = "El formato del nombre no es correcto, no debe contener números " +
		"ni caracteres especiales (excepto acentos).";
		TxtNombre.style.borderColor = "rgba(255,0,0,0.5)";
		NombreValido = false;
	}
}