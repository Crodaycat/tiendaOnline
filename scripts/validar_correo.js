TxtCorreo = document.getElementById("Email");
InfoCorreo = document.getElementById("CorreoInfo");
ValidoCorreo = false;

function Correo() {
	var RegExCorreo = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})(\.[a-zA-Z]{2})?$/;
	
	if (TxtCorreo.value.match(RegExCorreo) && TxtCorreo.value != ""){
		InfoCorreo.innerHTML = "Correcto.";
		TxtCorreo.style.borderColor  = "rgba(0,200,130,0.5)";
		ValidoCorreo = true;
	}
	else if(TxtCorreo.value == ""){
		InfoCorreo.innerHTML = "Ingrese un correo electrónico.";
		TxtCorreo.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoCorreo = false;
	}
	else{
		InfoCorreo.innerHTML = "Correo electrónico no válido.";
		TxtCorreo.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoCorreo = false;
	}
	
}