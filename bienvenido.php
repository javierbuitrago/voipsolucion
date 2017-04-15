<?php
	include('conexion.php');
	$query="SELECT id_pres, nom_pres, cedula_pres, telefono_pres, celular_pres, email_pres, usuario, clave FROM prestamistas";
	$resultado=$mysqli->query($query);
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Lakki+Reddy' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Caveat+Brush' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/fontello.css">
</head>
<body>

<form name="login" onsubmit="return validateForm() ;" method="post">
	
	<h1 class="icon-share">FreeNet...<br> Software!!  </h1>
	<h2>Identifiquese<span class="icon-heartbeat"></span></h2>

	<input class="username" type="text" name="usuario" placeholder="Usuario / Cedula">
	<input class="password" type="password" name="clave" placeholder= "Contraseña / Celular">
	<button type="button" class="submit" value="" name="submit" onclick="validarPres.php">Socio</button>
	<button type="button" class="submit" value="" name="submit" onclick="validarCli.php">Cliente</button>

</form>



</body>
</html>