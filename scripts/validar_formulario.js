function ValidarFormulario(){
	
	ValidarNombre();
	ValidarApellido();
	ValidarEdad();
	Correo();
	Contraseña();
	confirmar();
	
	if (NombreValido == true && ApellidoValido == true && ValidoEdad == true && ValidoCorreo == true && ValidoContraseña == true && ValidoConfirmar == true){
		return true;
	}
	else{
		return false;
	}
	
}