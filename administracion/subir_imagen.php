<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title</title>

<style>

input{
	height: 30px;
	background-color: rgb(240,240,240);
	border: 1px solid;
	border-color: rgb(200,200,200);
	border-radius: 1px;
	font-size: 1em;
}
		
input:hover{
	border-color: rgb(180,180,180);
	box-shadow: inset 0px 0px 4px 2px rgb(220,220,220);
}
		
input:focus{
	border: 1px solid;
	border-color: rgba(0,150,200,0.5);
	box-shadow: inset 0px 0px 4px 2px rgb(220,220,220);
}

button{
	height: 30px;
	background-color: rgba(0,140,80,0.4);
	border: 1px solid;
	border-color: rgb(200,200,200);
	border-radius: 3px;
	font-size: 1em;
}

button:hover{
	border-color: rgb(180,180,180);
	box-shadow: inset 0px 0px 4px 2px rgba(120,120,120,0.18);
}

button:active{
	border: 1px solid;
	border-color: rgba(0,150,200,0.5);
	box-shadow: inset 0px 0px 4px 2px rgba(120,120,120,0.2);
}

</style>

</head>
<body>

<?php

	if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "iniciado"))
	{	
		date_default_timezone_set("America/Bogota");
		
		$tipo = $_FILES['archivo']['type'];
		
		if ($tipo == "image/jpeg")
		{
			$nombre = date("d") . "-" . date("n") . "-" . date("Y") . "-" . date("H") . "-" . date("i") . "-" . date("s");
			$extension = ".jpg";
			$nombre_img = $nombre . $extension;
			move_uploaded_file($_FILES['archivo']['tmp_name'],"../documentos/noticias/" . $nombre_img);
		}
		elseif ($tipo == "image/png")
		{
			$nombre = date("d") . "-" . date("n") . "-" . date("Y") . "-" . date("H") . "-" . date("i") . "-" . date("s");
			$extension = ".png";
			$nombre_img = $nombre . $extension;
			move_uploaded_file($_FILES['archivo']['tmp_name'],"../documentos/noticias/" . $nombre_img);
		}
		else if ($_FILES['archivo']['error'] > 0)
		{
			echo "<br>Hay errores al subir la imágen";	
		}
		else
		{
			print_r($tipo);
			echo "<br>Error - Solo se admiten imagenes";
		}
?>
	
    <script>
    
		opener.document.frmNoticia.imagen.value = "<?php echo $nombre_img; ?>";
		self.close();
	
    </script>
    
<?php	
	}
	else
	{
?>
	
<form action="subir_imagen.php" method="post" enctype="multipart/form-data">

	Seleccionar archivo: <br />
	<input name="archivo" type="file" /><br />
    <button type="submit">Subir imagen</button><br />
    <input name="enviado" type="hidden" value="iniciado" />

</form>

<?php } ?>

</body>
</html>