<?php
	
	include('conexion.php');
	
	$id_cli=$_GET['id_cli'];
	
	$query="SELECT * FROM clientes WHERE id_cli='$id_cli'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, user-scalable=no, maximun-scale=1, minimun-scalable=1">
    <title>Soft FrreNet</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos_crearCli.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-es.js"></script>
    
</head>
<body>
<header>   
    <div class="contenedor">
        <h1 class="icon-edit">My Cartulina</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
            <a href="home.php">Inicio</a>
            <a href="listaClientes.php">Clientes</a>
            <a href="reportes.php">Reportes</a>
            <a href="soporte.html">Soporte</a></nav>
    </div>
</header>
    <div>
         <form method="post" action="updateCli.php" class="form">
             <legend>Modificar Datos Cliente</legend>
             <table width="77%">
                <tr>
             <input type="hidden" name="id_cli" value="<?php echo $id_cli; ?>"></tr>
                
                <tr><td><h3>Nombre:</h3></td><td>
                <input type="text" size="25" name="nombre"  value="<?php echo $row['nom_cli']; ?>"></td></tr>
                <tr><td><h3>Cedula:</h3></td><td>
                    <input type="text" size="25" name="cedula"  value="<?php echo $row['cedula_cli']; ?>"></td></tr>
                <tr><td><h3>Celular:</h3></td><td>
                    <input type="text" size="25" name="telefono"  value="<?php echo $row['celular_cli']; ?>"></td></tr>
                <tr><td><h3>Direccion:</h3></td><td>
                    <input type="text" size="25" name="direccion"  value="<?php echo $row['direccion']; ?>"></td></tr>
                <tr><td><h3>Email:</h3></td><td>
                    <input type="text" size="25"name="email" value="<?php echo $row['email']; ?>"></td></tr>
                <tr><td><h3>Usuario:</h3></td><td>
                                                    
                    <input type="text" size="25" name="usuario_cli" value="<?php echo $row['usuario_cli']; ?>"></td></tr>
                <tr><td><h3>Clave:</h3></td><td>
                    <input type="password" size="25" name="clave_cli" value="<?php echo $row['clave_cli']; ?>"></td></tr>
                <tr><td><h3>Confirmar Clave:</h3></td><td>
                    <input type="password" size="25" name="reclave_cli" value="<?php echo $row['reclave_cli']; ?>"></td></tr>
		   <tr>
                <td colspan="2" style="border: 0"><button type="submit" value="Actualizar Cliente" onclick= "window.location.href='updateCli.php'" class="subCrear">Actualizar Cliente</button></td></tr>
                 
        </table>                                
             
        </form>
       
    </div>  
   
</body>
</html>