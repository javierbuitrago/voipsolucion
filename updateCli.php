<?php

include('conexion.php');

    	$id_cli=$_POST['id_cli'];
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


	$query="UPDATE clientes SET nom_cli='$nombre', cedula_cli='$cedula_cli', f_Creacli='$f_Creacli',
		celular_cli='$celular', direccion='$direccion', 
		email='$email', usuario_cli='$usuario_cli', clave_cli='$clave_cli',
		reclave_cli='$reclave_cli' WHERE id_cli='$id_cli'"; 
	$mysqli->query($query);
	#print_r($query);
	header('location:home.php');
exit;	
?>