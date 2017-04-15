<?php
$cn=mysqli_connect("97.74.31.142","freenet","Software12#","freenet");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$bus=$_POST['txtBuscar'];

$query="SELECT * FROM clientes WHERE nom_cli='$bus'";
$cs=mysqli_query($cn,$query);

echo print_r($cs);
while($resul=mysqli_fetch_array($cs)){
        $campo1=$resul[1];
        $campo2=$resul[2];
        $campo3=$resul[3];
        $campo4=$resul[4];
        $campo5=$resul[5];
        $campo6=$resul[6];
        $campo7=$resul[7];
        $campo8=$resul[8];
        $campo9=$resul[9];
        $campo0=$resul[0];
}

// Free result set
mysqli_free_result($resul);

mysqli_close($cn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, user-scalable=no, maximun-scale=1, minimun-scalable=1">
    <title>Soft FrreNet</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
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
    <div id="contheader">
         <form method="post" action="guardar_cliente.php" class="b_buscar">
            
                <table border="0">
                <tr>
                    <td><input id="in_buscar" type="text" name="txtBuscar" placeholder="Ingrese nombre cliente" class="input-70" required></td>
                    <td>
                <button class="subBuscar" name="btnBuscar" type="submit" onclick= "window.location.href='buscar_cliente.php'" value="Buscar">Buscar</button></td>
                </tr>
                </table>
            
        </form>
        
<!--script>
    $("#fechaCredito").datepicker($.datepicker.regional[ "es" ]);
</script>
            <br>
            <br>
            <br>            
            <hr-->        
    </div>  
    <div>
		
			
			<table id="lista_clientes" border=1 class="tablageneral" width="100%">
				<tr>
					<th width="50%"><b>Nombre</b></th>
					<th width="20%"><b>Saldo</b></th>
					<th width="30%"><b>Opciones</b></th>				
				</tr>
				<tbody>
					<?php while($row=$resul){ ?>
						<tr>
							<td><?php echo $row['nom_cli'];?>
							</td>
							<td><?php echo $row['valor_prestamo'];?>
							</td>
							<td align="center">
								 <a href="eliminar_pres.php?id=<?php echo $row['id_pres'];?>"><span class="icon-dollar"></span></a>
                                
                                 <a href="eliminar_pres.php?id=<?php echo $row['id_pres'];?>"><span class="icon-edit"></span></a>
                                
                                <a href="eliminar_pres.php?id=<?php echo $row['id_pres'];?>"><span class="icon-trash"></span></a>
															
							</td>
				        </tr>
				        <?php } ?>
				        <tr>
						<td colspan="4" style="border: 0">
							<button style="background:red" type="button" name="Nuevo Usuario" class="subBuscar" onclick="window.location.href='crear_cliente.php'" value="text" >Agregar cliente<span class="icon-plus" style="color:white; border:none"></span></button>
						</td>
					</tr>
				</tbody>
            </table>
            
    </div>
</body>
</html>