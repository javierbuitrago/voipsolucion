<?php
	
	
	$mysqli=new mysqli("127.0.0.1","root","","creditos"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_error()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>