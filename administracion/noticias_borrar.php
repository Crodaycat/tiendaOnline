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
        
        	<h1>Borrar noticia<h1>
            <a href="noticias.php">Volver</a><br />
            
            <?php
            
				conectar();
					
					$recordID = $_GET['recordID'];
					
					$query = "SELECT strTitulo FROM tblNoticias WHERE tblNoticias.idNoticia = $recordID";
					$resultado = mysqli_query(conectar(),$query) or die ("Ha ocurrido un error. <br />" . mysqli_error($conectar));
					$row = mysqli_fetch_array($resultado);
					
					mysqli_close(conectar());
					
			?>
            
            <h5>¿Realmente desea borrar: "<?php echo $row['strTitulo']; ?>"?</h5>
            <form name="frmBorrar" method="post">
            <button name="borrar" type="submit">Borrar</button>
            </form>
            <?php
			
				if(isset($_POST['borrar']))
				{
					
					conectar();
					
					$recordID = $_GET['recordID'];
					
					$query = "DELETE FROM tblNoticias WHERE tblNoticias.idNoticia = $recordID";
					$resultado = mysqli_query(conectar(),$query) or die ("Ha ocurrido un error. <br />" . mysqli_error($conectar));
					
					echo "<h6>Eliminado.</h6>";
					
					mysqli_close(conectar());
				}
            
				
			
			?>
        
        </div><!-- InstanceEndEditable -->
	  
    </div>
    
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
	
    	
    
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>