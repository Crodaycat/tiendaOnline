<?php

	function conectar(){
		
		include ("datos_wiki.php");

		global $conectar;
		
		$conectar = mysqli_connect($host,$usuario,$Pass,$basededatos) or die ("Error al intentar conectar : ".mysqli_connect_error());
		
		return $conectar;
	}				
	
?>