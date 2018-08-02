<!DOCTYPE html>
<html>
<head>
	<?php 
	$Nombre = $_POST["nombre"];
	$Mail = $_POST["mail"];
	$Pass = $_POST["pass"];
	$Passch = $_POST["passch"];

	$Titular = $_POST["titular"];
	$Card = $_POST["card"];
	$Exp = $_POST["exp"];

	$contenido="
				INFO PERSONAL
	Nombre: $Nombre
	E-mail: $Mail
	Contraseña: $Pass
	Chequeo contraseña: $Passch
		INFO TARJETA
	Titular: $titular
	Tarjeta: $card
	Fecha de vencimiento: $Exp
	";
	$archivo = fopen("Usuarios/$Mail.txt", "w");
	fwrite($archivo, $contenido);
	 ?>

  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="TNT_css.css">
  <link rel="shortcut icon" type="image/png" href="TNT.png	">
	<meta charset="utf-8">
	<STYLE> a {text-decoration: none;} </STYLE>
	<title>Se ha creado su cuenta</title>
</head>
<body>
<p>Su cuenta fue creada con exito</p>
<button><a href="Registro.html">Volver</a></button>
</body>
</html>