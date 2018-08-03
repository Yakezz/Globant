<!DOCTYPE html>
<html>
<head>
	<?php 
	$Nombre = $_POST["nombre"];
	$Mail = $_POST["mail"];
	$Pass = $_POST["pass"];
	$Passch = $_POST["passch"];

	$Titular = $_POST["titular"];
	$Card = $_POST["tarjeta"];
	$ExpM = $_POST["expMes"];
	$ExpA= $_POST["expA"];

	$contenido="
				INFO PERSONAL

	Nombre: $Nombre
	E-mail: $Mail
	Contraseña: $Pass
	Chequeo contraseña: $Passch

				INFO TARJETA

	Titular: $Titular
	Tarjeta: $Card
	Fecha de vencimiento: Mes de $ExpM del año $ExpA
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
	 <style>
	 a{
  width:100%;
  padding:15px;
  border-radius:5px;
  @include disable;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font:14px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  border:1px solid #000;
  opacity:0.7;
	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  border-top:1px solid rgba(255,255,255,0.8)!important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)));
  	</style>
	<title>Se ha creado su cuenta</title>
</head>
<body>
	<div style="text-align: center;">
<h1>Su cuenta fue creada con exito</h1><br><br>
<a href="Registro.html">Volver</a>
</div>
</body>
</html>
