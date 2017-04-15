<?php
    include('conexion.php');
	$query="SELECT * FROM transacciones";
	$resultado=$mysqli->query($query);
    $res=$mysqli->query($query);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, user-scalable=no, maximun-scale=1, minimun-scalable=1">
    <title>Soft FrreNet</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/index02.css">
    <!--link rel="stylesheet" href="css/demos.css"-->
    <link rel="stylesheet" href="css/estilosHome2.css">
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
        <!--input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
            <a href="home.php">Inicio</a>
	    <a href="reportes.php">Reportes</a>
            <a href="cerrarSesion.php">Cerrar sesion</a>
            <a href="http://ingjavierbuitrago.com/contacto">Soporte</a></nav-->
    </div>
</header>
    
    <div id="contenedor1">
        <!--div id="logo"><a href="#"><img border="0" src="images/logo%20freenet%20nuevo.png" </a></div-->
        <!--div id="contenedor2"-->
            <!--div id="menu">
                <ul>
                    <li class="act"><a href="#">Clientes</a></li>
                    <li><a href="#">Resportes</a></li>
                    <li><a href="#">Salir</a></li>
                </ul> 
            </div-->
            <br>
            <br>
            <div id="contenedor2_1">
                <div id="menuTop">
                    <a href="home.php"><img src="">Inicio</a>
                    <a href="home.php"><img src="">Transacciones</a>
                    <a href="home.php"><img src="">configuracion</a>
                    <a href="home.php"><img src="">Cerrar Sesion</a>
                </div>
                <br><br>
                <div id="contenedor3">
                    <h2 aling="center" class="transacciones"> Su saldo pendiente es</h2>
                    <div style="margin:0 auto;">
                        <div id="div_prestamos" style="width:48%; display:inline-block;">
                            <h2 class="transaccion" aling="center">Prestamos</h2>
                            <table border="1" width="45%" aling="center">
                                <tr class="encabezado">
                                    <th>Desemb#</th>
                                    <th>Fecha</th>
                                    <th>Valor</th>
                                    <th>Cobro</th>
                                </tr>
                                <tbody>
                                    <?php while($row=$resultado->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $row['id_mto'];?></td>
                                            <td><?php echo $row['fecha_mto'];?></td>
                                            <td><?php echo $row['valor'];?></td>
                                            <td><?php echo $row['id_pres'];?></td>
                                        </tr>
                                    
                                    <?php }
                                    ?> 
                                    <td colspan="4" align="center">
                                        <div class="botones">
                                            <center>
                                                <input type="button" style="margin-right:3px;" class="boton" value="Nuevo Prestamo"onclick="abrir('/nuevo_prestamo.php','Prestamo a cliente','&id_cli','div_prestamos');"title="Hacer un nuevo prestamo a +.$xxxx. ">
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div align="center">Registros de 1 a 10 de ?</div>
                            <table border="0" width="45%" align="center">
                                <tbody>
                                <tr>
                                    <td width="23%" align="center">   </td>
                                    <td width="31%" align="center">   </td>
                                    <td width="23%" align="center">   </td>
                                    <td width="23%" align="center">   </td>
                                
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                         <div id="div_abonos" style="width:45%; display:inline-block; vertical-align:top;">
                        <h2 class="transaccion" aling="center">Abonos</h2>
                            <table border="1" width="45%" aling="center">
                                
                                <tr class="encabezado">
                                    <th>ID Trans</th>
                                    <th>Fecha</th>
                                    <th>Valor</th>
                                    <th>cobro</th>
                                </tr>
                                <tbody>
                                    <?php while($row=$res->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $row['id_mto'];?></td>
                                            <td><?php echo $row['fecha_mto'];?></td>
                                            <td><?php echo $row['valor'];?></td>
                                            <td><?php echo $row['id_cli'];?></td>
                                        </tr>
                                    
                                    <?php
                                    } ?> 
                                    <td colspan="10" align="center">
                                        <div class="botones">
                                            <center>
                                                <input type="button" style="margin-right:3px;" class="boton" value="Nuevo Abono"onclick="abrir('/nuevo_abono.php','Abono a cliente','&id_cli','div_abonos');"title="Hacer un nuevo Abono a +.$xxxx. ">
                                            </center>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div align="center">Registros de $?1 a $?10 de ?</div>
                            <table border="0" width="50%" align="center">
                            <tbody>
                                <tr>
                                    <td width="23%" align="center">   </td>
                                    <td width="31%" align="center">   </td>
                                    <td width="23%" align="center">   </td>
                                    <td width="23%" align="center">   </td>
                                
                                </tr>
                            </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <!--div id="right">
                    <h2 align="center">Cliente</h2>
                    <table align="center" class="informacion">
                        <tbody>
                            <tr>
                                <th>Saldo:</th>
                                <td align="justify">$</td>
                            </tr>
                            <tr>
                                <th>Saldo:</th>
                                <td align="justify">$</td>
                            </tr>
                            <tr>
                                <th>Saldo:</th>
                                <td align="justify">$</td>
                            </tr>
                            <tr>
                                <th>Saldo:</th>
                                <td align="justify">$</td>
                            </tr>
                            <tr>
                                <th>Saldo:</th>
                                <td align="justify">$</td>
                            </tr>
                        </tbody>
                    </table>
                <!--/div-->
            <!--/div rigth-->
        </div-->    
        
    
    </div>
    
        
        
         <!--form method="post" action="buscar_cliente.php" class="b_buscar">
            
                <table border="0">
                <tr>
                    <td><input id="in_buscar" type="text" name="txtBuscar" placeholder="Ingrese nombre cliente" onkeyup="lista_clientes(this.value);"></td>
                    <td>
                <button class="btnBuscar" name="btnBuscar" type="submit" onclick= "window.location.href='buscar_cliente.php'" value="Buscar">Buscar</button></td>
                </tr>
                </table>
            
        </form>
        
<script>
    $("#fechaCredito").datepicker($.datepicker.regional[ "es" ]);
</script>

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
            </table-->
            
    
</body>
</html>