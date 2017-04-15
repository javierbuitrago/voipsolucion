<?php

include('conexion.php');

    	$nombre=$_POST['nombre'];
	$cedula_cli=$_POST['cedula'];
	$celular=$_POST['celular'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
      	$usuario_cli=$_POST['usuario_cli'];	
    	$clave_cli=$_POST['clave_cli'];
    	$reclave_cli=$_POST['reclave_cli'];
	date_default_timezone_set("America/bogota");
	$f_Creacli =date('Y/m/d H:i:sa'); //en ese orden para que compatibilice con MySQL

	if($clave_cli===$reclave_cli){

	$query="INSERT INTO clientes (nom_cli, cedula_cli, celular_cli, direccion, email, f_Creacli, usuario_cli, clave_cli, reclave_cli) 
VALUES ('$nombre','$cedula_cli','$celular','$direccion','$email', '$f_Creacli', '$usuario_cli', '$clave_cli','$reclave_cli' )";
	$mysqli->query($query);
	//print_r($query);
	header('location:home.php');
exit;
	}
	else{
	echo ('La contraseña no coincide');
	 };

exit;	
?>