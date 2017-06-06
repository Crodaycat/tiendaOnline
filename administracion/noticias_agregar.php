<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"><!-- InstanceBegin template="/Templates/base_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<link rel="shortcut icon" href="../imagenes/.ico"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- InstanceBeginEditable name="doctitle" -->
	<title>Tienda de CD's</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="Estilos" -->

	<link rel="stylesheet" type="text/css" href="../styles/NBar.css" />
	<link rel="stylesheet" type="text/css" href="../styles/Estilo1.css" />
	<link rel="stylesheet" type="text/css" href="../styles/CBar.css" />
	<link rel="stylesheet" type="text/css" href="../styles/Content.css" />
    <link rel="stylesheet" type="text/css" href="../styles/Forms.css" />
    
<!-- InstanceEndEditable -->
	
    				
	<?php include("../includes/conexion_wiki.php"); ?>

</head>

<body>
	
    	<!-- InstanceBeginEditable name="Header" -->
        <header>

		<div class="contenedor" id="uno">

			<a href="index.php">
				<img class="icon" src="../imagenes/Home.png" />
			<p class="texto">Inicio</p>
			</a>
		
		</div>

		<div class="contenedor" id="dos">
			<img class="icon" src="../imagenes/Products.png" />
			<p class="texto">Productos</p>
		</div>

		<div class="contenedor" id="tres">
			<img class="icon" src="../imagenes/Products.png" />
			<p class="texto">Carrito de compras</p>
		</div>

		<div class="contenedor" id="cuatro">
			<img class="icon" src="../imagenes/Help.png" />
			<p class="texto">Ayuda</p>
		</div>

		<div class="contenedor" id="cinco">
			<img class="icon" src="../imagenes/Products.png" />
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
	  
      	<div class="panel">

			<?php include("../includes/cabecera.php"); ?>

		</div>
        <!-- InstanceBeginEditable name="Contenido" -->
        <div class="contenido">
        
        	<h1>
        	Agregar noticia
        	<h1>
            <a href="noticias.php">Volver</a>
            
            <form method="post" name="frmNoticia">
            
            	<table class="tabla-registro">
                <tr>
                	<th colspan="2"><center>Título: <input type="text" name="titulo" size="30" maxlength="40" />
                    Importacia: <input name="importancia" type="text" size="12" maxlength="1" /></center>
                    </th>
                </tr>
                <tr>
                    <th colspan="2"><center>Descripción:</center></th>
                </tr>
                <tr>
                	<th colspan="2"><textarea name="descripcion" rows="1" style="max-height: 20px;"></textarea></th>
                </tr>
                <tr>
                    <th colspan="2"><center>Contenido</center></th>
                </tr>
                <tr>
                	<th colspan="2"><textarea name="contenido"></textarea></th>
                </tr>
                <tr>
                    <th colspan="2"><center>Imagen: <input name="imagen"  id="imagen" />
                    <button type="button" onclick="subir_imagen();">Subir imagen</button></center></th>
                </tr>
                </table>
                
                <button name="agregarnoticia" type="submit">Agregar</button>
            
            </form>
            
            <?php
				if(isset($_POST['agregarnoticia']))
				{
					conectar();
					
					$titulo = $_POST['titulo'];
					$importancia = $_POST['importancia'];
					$descripcion = $_POST['descripcion'];
					$contenido = $_POST['contenido'];
					date_default_timezone_set("America/Bogota");
					$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre",
					"Noviembre","Diciembre");
					$fecha = date("d") . " de " . $meses[date("n")-1] . " del " . date("Y") . " a las " . date("H:i") . " GMT -5:00.";
					$imagen = $_POST['imagen'];
					
					$query = "INSERT INTO
					tblNoticias(idNoticia,strTitulo,strDescripcion,strContenido,strFecha,strImagen,intImportante)
					VALUES('','$titulo','$descripcion','$contenido','$fecha','$imagen','$importancia')";
					$resultado = mysqli_query(conectar(),$query) or die ("Ha ocurrido un error: " . mysqli_error(conectar()));
					echo "<h6>Correcto.</h6>";
				}
				mysqli_close(conectar());
			?>
        
      </div><!-- InstanceEndEditable -->
	  
    </div>
    
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
	
    	<script src="../scripts/subir_imagen.js" type="text/javascript"></script>
    
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>