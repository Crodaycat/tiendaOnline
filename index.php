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
        	
            <h1>Panel noticias</h1>
            
		</div>
        <div class="contenido">
        
        	<?php
			
				conectar();
				
				$query_nrml = "SELECT idNoticia,strTitulo,strDescripcion,strImagen FROM tblNoticias
				WHERE intImportante=1 ORDER BY idNoticia DESC";
				$resultado_nrml = mysqli_query(conectar(),$query_nrml) or die ("Ha ocurrido un error." . mysqli_error($conectar));
				$total_nrml = mysqli_num_rows($resultado_nrml);
				
				$query_imptnte = "SELECT idNoticia,strTitulo,strDescripcion,strImagen FROM tblNoticias
				WHERE intImportante=2 ORDER BY idNoticia DESC";
				$resultado_imptnte = mysqli_query(conectar(),$query_imptnte) or die ("Ha ocurrido un error." . mysqli_error($conectar));
				$total_imptnte = mysqli_num_rows($resultado_imptnte);
				
				$resultado_nrml2 = mysqli_query(conectar(),$query_nrml) or die ("Ha ocurrido un error." . mysqli_error($conectar));
				
				$resultado_imptnte2 = mysqli_query(conectar(),$query_imptnte) or die ("Ha ocurrido un error." . mysqli_error($conectar));
				
				$total = $total_nrml + $total_imptnte;
				
				$conizq = 0;
				$conder = 0;
				$con_imptnte = 0;
				$con_nrml = 0;
				
				$row_nrml = mysqli_fetch_array($resultado_nrml);
				$row_imptnte = mysqli_fetch_array($resultado_imptnte);
				
				for($i = 1; $i <= $total; $i++)
				{
					
				$imp_nrml_img = "<div class=\"noticias\"><h1>" . $row_nrml['strTitulo'] . "</h1><img src=\"documentos/noticias/" .
					$row_nrml['strImagen'] . "\" /><h4><br /><br /><h4>" . $row_nrml['strDescripcion'] .
					"</h4><a href=\"noticia.php?recordID=" . $row_nrml['idNoticia'] . "\">Leer más...</a></div> \n        	";
					
				$imp_nrml_noimg = "<div class=\"noticias\"><h1>" . $row_nrml['strTitulo'] . "</h1><h4>" .
						$row_nrml['strDescripcion'] . "</h4><a href=\"noticia.php?recordID=" .
						$row_nrml['idNoticia'] . "\">Leer más...</a></div> \n        	";
				
				$imp_imptnte_img = "<div class=\"noticias\"><h1>" . $row_imptnte['strTitulo'] . "</h1><img src=\"documentos/noticias/" .
					$row_imptnte['strImagen'] . "\" /><h4>" . $row_imptnte['strDescripcion'] .
					"</h4><a href=\"noticia.php?recordID=" . $row_imptnte['idNoticia'] . "\">Leer más...</a></div> \n        	";
					
				$imp_imptnte_noimg = "<div class=\"noticias\"><h1>" . $row_imptnte['strTitulo'] . "</h1><h4>" .
						$row_imptnte['strDescripcion'] . "</h4><a href=\"noticia.php?recordID=" .
						$row_imptnte['idNoticia'] . "\">Leer más...</a></div> \n        	";
					
					$izq = 12 * $conizq + 1;
					$der = 12 * $conder + 8;
					
					if($i == $izq && $con_imptnte < $total_imptnte)
					{
						echo $imp_imptnte_img;
						$conizq = $conizq + 1;
						$row_imptnte = mysqli_fetch_array($resultado_imptnte);
					}
					else if($i == $izq && $con_imptnte > $total_imptnte)
					{
						echo $imp_nrml_img;
						$conizq = $conizq + 1;
						$row_nrml = mysqli_fetch_array($resultado_nrml);
					}
					else if($i == $der && $con_imptnte < $total_imptnte)
					{
						echo $imp_imptnte_img;
						$conder = $conder + 1;
						$row_imptnte = mysqli_fetch_array($resultado_imptnte);
					}
					else if($i == $der && $con_imptnte > $total_imptnte)
					{
						echo $imp_nrml_img;
						$conder = $conder + 1;
						$row_nrml = mysqli_fetch_array($resultado_nrml);
					}
					else
					{
						if(($row_imptnte['idNoticia'] > $row_nrml['idNoticia']) && $con_imptnte < $total_imptnte)
						{
							echo $imp_imptnte_noimg;
							$con_imptnte = $con_imptnte + 1;
							$row_imptnte = mysqli_fetch_array($resultado_imptnte);
							
						}
						else if(($row_imptnte['idNoticia'] < $row_nrml['idNoticia']) && $con_nrml < $total_nrml)
						{
							echo $imp_nrml_noimg;
							$con_nrml = $con_nrml + 1;
							$row_nrml = mysqli_fetch_array($resultado_nrml);
						}
					}
				}
				
				mysqli_close(conectar());
			
            ?>
        
        </div>
		<!-- InstanceEndEditable -->
    </div>
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
	
    	
    
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>