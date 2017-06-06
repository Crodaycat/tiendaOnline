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
        <div class="panel">
        	
            <h1>Panel</h1>
            
		</div>
        <div class="contenido">
        
        	<?php
				conectar();
				
				$recordid = $_GET['recordID'];
				
				$query = "SELECT strTitulo,strContenido,strFecha,strImagen
				FROM tblNoticias WHERE idNoticia = $recordid";
				$resultado = mysqli_query(conectar(),$query) or die ("Ha ocurrido un error.".mysqli_connect_error($query));
				$row = mysqli_fetch_array($resultado);
				
				echo
				"
					<h10>" . $row['strTitulo'] . "</h10>" .
					"<div class=\"imgnoticia\"><img src=\"documentos/noticias/" . $row['strImagen'] . "\" /></div>" .
					"<h7>Fecha: " . $row['strFecha'] . "</h7>" .
					"<br /><br /><h3>" . $row['strContenido'] . "</h3>
				";
			?>
        
        </div>
		<!-- InstanceEndEditable -->
    </div>
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
	
    	
    
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>