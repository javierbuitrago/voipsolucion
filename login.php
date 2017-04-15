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
</head>
<body>

<form name="login" onsubmit="return validateForm() ;" method="post">
	
	<h1>FREENET</h1>
	<h2>Identifiquese</h2>

	<input class="username" type="text" name="username" placeholder="Ingrese su Usuario">
	<input class="password" type="password" name="password" placeholder="Ingrese su Contraseña">
	<button type="button" class="submit" value="Ingresar" name="submit" onclick="validate()">Ingresar</button>



</form>
<script>
	var count=2;
    <?php while($resultado=mysqli_fetch_assoc($query)){
    $u=$resultado[6];
    $p=$resultado[7];
        }
    ?>

	function validate(){
		var un = document.login.username.value;
		var pw = document.login.password.value;
		var valid= false;
		var usernameArray =<?php $u[i]?>;
		var passwordArray = <?php$c[i]?>;
		for (var i = 0; i < usernameArray.length; i++) 
		{
			if ((un == usernameArray[i])&&(pw == passwordArray[i])) {
				valid = true;
				break;
			}	
		}
			if (valid) {
				alert("Login Successful");
				window.location = "http://ingjavierbuitrago.com"
				return false;
			}
			var again = "tries";
			if (count == 1) {
				again = "try"
			}
			if (count>=1) {
				alert("digito mal el usuario o contraseña");
				count--;

			}
			else {
				alert("bloqueado por intentos fallidos, comuniquese con el administrador");
				document.login.username.value = "bloqueado user";
				document.login.password.value = "bloqueado pass";
				document.login.username.disabled = true;
				document.login.password.disabled = true;
				return false;
				}
}



</script>-->
</body>
</html>