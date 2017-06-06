TxtPass = document.getElementById("Pass");
InfoPass = document.getElementById("InfoPass");
TxtConfirmar = document.getElementById("Confirmar");		
InfoConfirmar = document.getElementById("InfoConfirmar");

ValidoContraseña = false;
ValidoConfirmar = false;

function Contraseña() {

	var RegExPatron = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?!.*\W)(?![.\n]).*$/;
	var RegExTamaño = /(?=^.{8,16}$)/;
    		
	if(TxtPass.value.match(RegExTamaño)){
		if (TxtPass.value.match(RegExPatron)) {
        	InfoPass.innerHTML = "Contraseña correcta.";
			TxtPass.style.borderColor = "rgba(0,200,130,0.5)";
			ValidoContraseña =  true;
    	}
		else {
        	InfoPass.innerHTML = 
			"La contraseña debe tener almenos una letra mayúscula, una letra minúscula y un número. " +
			"No debe contener carácteres especiales (Inclusive la letra ñ) ni espacios en blanco.";
			TxtPass.style.borderColor = "rgba(255,0,0,0.5)";
			ValidoContraseña = false;
			} 

	}
	else {
		InfoPass.innerHTML = "La longitud de la contraseña debe estar entre 8-16.";
		TxtPass.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoContraseña = false;
	}
						
}
		
function confirmar() {
			
	if (TxtPass.value === TxtConfirmar.value && TxtPass.value != ""){
		InfoConfirmar.innerHTML = "Correcto.";
		TxtConfirmar.style.borderColor = "rgba(0,200,130,0.5)";
		ValidoConfirmar = true;
	}
	else{
		InfoConfirmar.innerHTML = "El campo está vacio o no coincide con la contraseña.";
		TxtConfirmar.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoConfirmar =  false;
	}
			
}