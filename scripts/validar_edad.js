TxtEdad = document.getElementById("Edad");
InfoEdad = document.getElementById("InfoEdad");

ValidoEdad = false;

function ValidarEdad() {
	
	if(TxtEdad.value == ""){
		InfoEdad.innerHTML = "Debe ingresar su edad.";
		TxtEdad.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoEdad = false;
	}
	else if(isNaN(TxtEdad.value)){
		InfoEdad.innerHTML = "Debe ingresar números.";
		TxtEdad.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoEdad = false;
	}
	else if(TxtEdad.value < 8){
		InfoEdad.innerHTML = "Debe tener almenos 8 años.";
		TxtEdad.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoEdad = false;
	}
	else if(TxtEdad.value > 110){
		InfoEdad.innerHTML = "Esa edad no es posible aún.";
		TxtEdad.style.borderColor = "rgba(255,0,0,0.5)";
		ValidoEdad = false;
	}
	else{
		InfoEdad.innerHTML = "Correcto.";
		TxtEdad.style.borderColor = "rgba(0,200,130,0.5)";
		ValidoEdad = true;
	}
	
}