function subir_imagen()
{
	self.name = "opener";
	remote = open('subir_imagen.php','remote',
	'width=400,height=150,ocation=no,scrollbar=no,menubars=no,toolsbar=no,resizable=no,fullscreen=no,status=yes');
	remote.focus();
}