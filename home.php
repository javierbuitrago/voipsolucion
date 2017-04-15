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
    <link rel="stylesheet" href="css/estilosHome.css">
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
	    <a href="reportes.php">Reportes</a>
            <a href="cerrarSesion.php">Cerrar sesion</a>
            <a href="http://ingjavierbuitrago.com/contacto">Soporte</a></nav>
    </div>
</header>
    <div>
         <form method="post" action="buscar_cliente.php" class="b_buscar">
            
                <table border="0">
                <tr>
                    <td><input id="in_buscar" type="text" name="txtBuscar" placeholder="Ingrese nombre cliente" onkeyup="lista_clientes(this.value);"></td>
                    <td>
                <button class="btnBuscar" name="btnBuscar" type="submit" onclick= "window.location.href='buscar_cliente.php'" value="Buscar">Buscar</button></td>
                </tr>
                </table>
            
        </form>
<br>            
    </div>  
    <legend>Clientes</legend>
		
			
			<table id="lista_clientes" border=1 class="tablageneral" width="100%">
				<tr>
					<th width="40%"><b>Nombre</b></th>
					<th width="15%"><b>usuario</b></th>
					<th width="20%"><b>Fecha</b></th>
					<th width="25%"><b>Opciones</b></th>				
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['nom_cli'];?>
							</td>
							<td><?php echo $row['usuario_cli'];?>
							</td>
							<td><?php echo $row['f_Creacli'];?>
							</td>
							<td align="center">
								 <a href="transCli.php?id_cli=<?php echo $row['id_cli'];?>"><span class="icon-dollar"></span></a>
                                
                                 <a href="editarCli.php?id_cli=<?php echo $row['id_cli'];?>"><span class="icon-edit"></span></a>
                                
                                <a href="eliminarCli.php?id_cli=<?php echo $row['id_cli'];?>"><span class="icon-trash"></span></a>
															
							</td>
				        </tr>
				        <?php } ?>
				        <tr>
						<td colspan="4" style="border: 0">
							<button style="background:darkturquoise" type="button" name="NuevoUsuario" class="btnCrear" onclick="window.location.href='crear_cliente.php'" value="text" >Agregar cliente<span class="icon-plus" style="color:black; border:none"></span></button>
						</td>
					</tr>
				</tbody>
            </table>
            
    
</body>
</html>