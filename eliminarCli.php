<?php 
	
	require('conexion.php');
	
	$id_cli=$_GET['id_cli'];
	
	$query="DELETE FROM clientes WHERE id_cli='$id_cli'";
	
	$resultado=$mysqli->query($query);

header('Location: home.php');
exit;
?>

