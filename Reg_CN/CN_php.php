<!DOCTYPE html>
<html>
<head>
	<?php 
	$Nombre = $_POST["nombre"];
	$Mail = $_POST["mail"];
	$Pass = $_POST["pass"];

	$contenido="
	Nombre: $Nombre
	E-mail: $Mail
	Contraseña: $Pass
	";

	$archivo = fopen("Usuarios/$Mail.txt", "w");
	fwrite($archivo, $contenido);
	 ?>
	<link rel="stylesheet" type="text/css" href="Reg_css.css">
	<link rel="shortcut icon" type="image/png" href="CN.png">
	<meta charset="utf-8">
	<STYLE> a {text-decoration: none;} </STYLE>
	<title>Se ha creado su cuenta</title>
</head>
<body>
<p class="texto">¡¡¡Su cuenta fue creada con exito!!!</p>
<div class="Registro">
<button><a href="Registro.html">Volver</a></button>
</div>
</body>
</html>