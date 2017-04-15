<?php
	include('conexion.php');
	$query="SELECT * FROM clientes";
	$resultado=$mysqli->query($query);
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
         <form method="post" action="guardar_cliente.php" class="form">
            <legend>Ingresar Datos Cliente</legend>
                
                <input type="text" class="place-color" name="nombre" placeholder="Nombre" required>
                <input type="text" class="place-color" name="cedula" placeholder="Cedula" >
                <input type="text" class="place-color" name="telefono" placeholder="Telf/Cel" required>
                <input type="text" class="place-color" name="direccion" placeholder="Dirección" required>
                <input type="text" class="place-color" name="email" placeholder="email" required>
                                                    
                <input type="text" class="place-color" name="usuario_cli" placeholder="Escoja su Usuario">
		<input type="password" class="place-color" name="clave_cli" placeholder="Digite Contraseña">
		<input type="password" class="place-color" name="reclave_cli" placeholder="Repita su Contraseña">
		   
                <button type="submit" value="Crear Cliente" onclick= "window.location.href='guardar_cliente.php'" class="subCrear">Crear Cliente</button>
                 
                                        
             
        </form>
       
    </div>  
   
</body>
</html>