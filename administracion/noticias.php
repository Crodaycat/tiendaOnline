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
        
        	<h1>Noticias<h1>
            <a href="noticias_agregar.php">Agregar nueva noticia</a><br />
            <table width="200" border="1" cellpadding="0" cellspacing="0" class="tabla-consulta">
  				<tr>
    				<th scope="col">Título</th>
    				<th scope="col">Descripción</th>
    				<th scope="col">Fecha</th>
    				<th scope="col">Importacia</th>
    				<th scope="col">Acciones</th>
  				</tr>
                <?php

				conectar();
				
				$query = "SELECT idNoticia,strTitulo,strDescripcion,strFecha,intImportante FROM tblNoticias 
				ORDER BY idNoticia DESC";
				$resultado = mysqli_query($conectar,$query) or die ("Ha ocurrido un error. <br />" . mysqli_error($conectar));
				$total = mysqli_num_rows($resultado);
				
				if ($total > 0)
				{
					$resultado_relacion = mysqli_query($conectar,"SELECT intImportante FROM tblNoticias WHERE intImportante = 2")
					or die ("Ha ocurrido un error. <br />" . mysqli_error($conectar));
					$total_relacion = mysqli_num_rows($resultado_relacion);
					$relacion = ($total - $total_relacion) / $total_relacion;
					
					echo "<h4>La relación normales a importantes es de " . $relacion . " a 1. El total de noticias es: " . $total . ".</h4>";
					while ($row = mysqli_fetch_array($resultado)){
						echo "<tr>";
						echo "<td><h8>" . $row['strTitulo']. "</h8></td>";
						echo "<td><h8>" . $row['strDescripcion'] .  "</h8></td>";
						echo "<td><h8>" . $row['strFecha'] . "</h8></td>";
						
						if($row['intImportante'] == 1)
						{
							echo "<td><h8>Normal</8></td>";
						}
						else
						{
							echo "<td><h8>Importante</8></td>";
						}
						
						echo "<td><h8>" . "<a href=\"noticias_editar.php?recordID=" . $row['idNoticia']. "\">Editar</a>" .
						" - <a href=\"noticias_borrar.php?recordID=" . $row['idNoticia']. "\">Borrar</a></h8></td>";
						echo "</tr>";
					}
				}
				else
				{
					echo "
					<form method=\"post\">
            			<button name=\"poneruno\" id=\"poneruno\" type=\"submit\">Auto-increment = 1</button><br />
            		</form>
					<h5>Se encontraron 0 resultados.</h5>";
					if(isset($_POST['poneruno']))
					{
						conectar();
						$query2 = "ALTER TABLE tblNoticias AUTO_INCREMENT = 1";
						$resultado2 = mysqli_query(conectar(),$query2) or die ("<br />No se puedo establcer el auto-increment = 1." .
						mysqli_error($conectar));
						echo "<h6>Auto-increment ahora es igual a 1.</h6>";
						mysqli_close($conectar);
					}
				}
				
				mysqli_close($conectar);
			?>
			</table>

        
        </div><!-- InstanceEndEditable -->
	  
    </div>
    
    <footer></footer>
    
	<!-- InstanceBeginEditable name="Scripts" -->
	
    	
    
	<!-- InstanceEndEditable -->
    
    
</body>
<!-- InstanceEnd --></html>