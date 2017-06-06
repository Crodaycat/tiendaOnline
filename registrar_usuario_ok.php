<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"><!-- InstanceBegin template="/Templates/base_pagina.dwt .php" codeOutsideHTMLIsLocked="false" -->
<head>

	<link rel="shortcut icon" href=""/>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <meta charset="utf-8">
    
<!-- InstanceBeginEditable name="doctitle" -->
	<title>Tienda de CD's</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="Estilos" -->

	<link rel="stylesheet" type="text/css" href="styles/NBar.css" />
	<link rel="stylesheet" type="text/css" href="styles/Estilo1.css" />
	<link rel="stylesheet" type="text/css" href="styles/CBar.css" />
	<link rel="stylesheet" type="text/css" href="styles/Content.css" />
    <link rel="stylesheet" type="text/css" href="styles/Forms.css" />
    
<!-- InstanceEndEditable -->
	<?php include("includes/conexion_wiki.php"); ?>
    
</head>

<body>	

    	<!-- InstanceBeginEditable name="Header" -->
        <header>

		<div class="contenedor" id="uno">

			<a href="index.php">
				<img class="icon" src="imagenes/Home.png" />
			<p class="texto">Inicio</p>
			</a>
		
		</div>

		<div class="contenedor" id="dos">
			<img class="icon" src="imagenes/Products.png" />
			<p class="texto">Productos</p>
		</div>

		<div class="contenedor" id="tres">
			<img class="icon" src="imagenes/Products.png" />
			<p class="texto">Carrito de compras</p>
		</div>

		<div class="contenedor" id="cuatro">
			<img class="icon" src="imagenes/Help.png" />
			<p class="texto">Ayuda</p>
		</div>

		<div class="contenedor" id="cinco">
			<img class="icon" src="imagenes/Products.png" />
			<p class="texto">Contacto</p>
		</div>

	</header><!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="Barra de control" -->
    <div class="CBar">
    	
        
        
	</div><!-- InstanceEndEditable -->
    <div class="Content">
    
    <noscript>
    	
        <h1>¡Hay un problema!</h1>
        <h3>Para poder visualizar correctamente este sitio debes habilitar javascript.</h3>
        
    </noscript>
	  
      	<!-- InstanceBeginEditable name="Contenidos" -->
      	<?php
		
			conectar();
			
			$_nombres = $_POST['nombres'];
			$_apellidos = $_POST['apellidos'];
			$_edad = $_POST['edad'];
			$_correo = $_POST['correo'];
			$_activo = 1;
			$_pass = $_POST['pass']; 
			
			$_result = mysqli_query(conectar(),"INSERT INTO
			tblusuarios(idUsuario,strNombres,strApellidos,intEdad,strEmail,intActivo,strPassword)
			VALUES('', '$_nombres', '$_apellidos', '$_edad', '$_correo', '$_activo', '$_pass')")
			or die ("Error al registrar usuario: " . mysql_error(conectar()));
			
			$nombre = $_POST['nombres'];
			$correo = $_POST['correo'];
			
			echo
			"<h2>$nombre su usuario ha sido registrado correctamente.</h2><br>
			<h3>Se ha enviado un correo al e-mail: $correo. Para activar su cuenta
			ingrese a su correo e ingrese al link contenido en este.</h3>";
			
			mysqli_close(conectar());
		
		?>
      	<!-- InstanceEndEditable -->
    </div>
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
	
    	
    
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>