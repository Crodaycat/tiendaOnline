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
        <h3><center>
            ¡Bienvenido!, rellene los siguientes campos para crear un usuario.</center></h3>
        
      	<form name="registrar usuario" method="post" onsubmit="return ValidarFormulario();" action="registrar_usuario_ok.php">
        	<table class="tabla-registro">
      	  	<tr>
      	    	<th scope="row">Nombre(s):</th>
      	    	<td><input id="Nombre" type="text" name="nombres" size="20" maxlength="20" onblur="ValidarNombre();" /></td>
   	      	</tr>
            <tr>
            	<th></th>
            	<td><h9 id="InfoNombre"><br /></h9></td>
            </tr>
      	  	<tr>
      	    	<th scope="row">Apellidos:</th>
      	    	<td><input id="Apellidos" type="text" name="apellidos" size="20" maxlength="20" onblur="ValidarApellido();" /></td>
   	      	</tr>
            <tr>
      	    	<th></th>
      	    	<td><h9 id="InfoApellido"><br /></h9></td>
   	      	</tr>
      	  	<tr>
      	    	<th scope="row">Edad:</th>
      	    	<td><input id="Edad" type="text" name="edad" size="20" maxlength="3" onblur="ValidarEdad();" /></td>
   	      	</tr>
            <tr>
      	    	<th scope="row"></th>
      	    	<td><h9 id="InfoEdad"><br /></h9></td>
   	      	</tr>
      	  	<tr>
      	    	<th scope="row">Correo electrónico:</th>
      	    	<td>
                	<input id="Email" type="text" name="correo" size="25" maxlength="25" onblur="Correo();" />
                </td>
   	      	</tr>
            <tr>
            	<th></th>
            	<td><h9 id="CorreoInfo"><br /></h9></td>
            </tr>
      	  	<tr>
      	    	<th scope="row">Contraseña:</th>
      	    	<td>
                	<input id="Pass" type="password" name="pass" size="20" maxlength="16" onblur="Contraseña(), confirmar();" /> 
                </td>
   	      	</tr>
            <tr>
            	<th></th>
            	<td><h9 id="InfoPass"><br /></h9></td>
            </tr>
            <tr>
            <th>Confirmar contraseña:</th>
            <td>
            	<input id="Confirmar" type="password" name="Confirmar" size="20" maxlength="16" onblur="confirmar();" />
            </td>
            </tr>
            <tr>
            	<th></th>
                <td><h9 id="InfoConfirmar"><br /></h9></td>
            </tr>
   	    	</table><br />
        	<center><button>Registrarme</button></center>
        </form>
      	<!-- InstanceEndEditable -->
    </div>
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
    		<script src="scripts/validar_name.js" type="text/javascript"></script>
            <script src="scripts/validar_apellido.js" type="text/javascript"></script>
    		<script src="scripts/validar_edad.js" type="text/javascript"></script>
			<script src="scripts/validar_correo.js" type="text/javascript"></script>
			<script src="scripts/validar_pass.js" type="text/javascript"></script>
            <script src="scripts/validar_formulario.js" type="text/javascript"></script>
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>