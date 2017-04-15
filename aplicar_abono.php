<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$saldo_pte=$_POST['saldo_pte'];
	$fecha_abono=$_POST['fecha_abono'];
	
	$query="UPDATE abonos SET nombre='$usuario', contrasenia='$password', email='$email' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				