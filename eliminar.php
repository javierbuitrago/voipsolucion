<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM clientes WHERE id='$id'";
	
	$resultado=$mysqli->query($query);

header('Location: index.php');
exit;
?>

