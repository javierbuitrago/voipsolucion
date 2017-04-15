<?php
	include('conexion.php');
	$query="SELECT id_pres, nom_pres, cedula_pres, telefono_pres, celular_pres, email_pres, usuario, clave FROM prestamistas";
	$resultado=$mysqli->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, user-scalable=no, maximun-scale=1, minimun-scalable=1">
    <title>Soft FrreNet</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilosad.css">
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
        <h1 class="icon-globe">Admin freenet soft</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
            <a href="index.php">Inicio</a>
            <a href="listaClientes.php">Clientes</a>
            <a href="reportes.php">Reportes</a>
            <a href="soporte.html">Soporte</a></nav>
    </div>
</header>
    <div id="contheader">
         <form method="POST" action="guardar_prestamista.php" class="from-registro">
            <div class="contprimario"><legend>Ingresar Datos Prestamista</legend>
                
                <input type="text" name="nom_pres" value="" placeholder="*Nombre" required>
                
                <input type="text" name="cedula_pres" value="" placeholder="Cedula">
                
                <input type="text" name="email_pres" value="" placeholder="@ email">
                
                <input type="text" name="celular_pres" value="" placeholder="Celular" required>
                
                <input type="text" name="telefono_pres" value="" placeholder="Telfefono">
                
                <input type="text" name="usuario" value="" placeholder="*Usuario" required>
                
                <input type="password" name="clave" id="clave" placeholder="*Ingrese clave" required>
                                                            
                <input type="password" name="confir_clave" id="rclave" placeholder="*Confirme clave" required>
                         
                                               
                           
                <button type="submit" onclick= "window.location.href='guardar_prestamista.php'" class="subCrear">Guardar Cambios</button>               
            </div>
        </form>
    </div>
   
</body>
</html>