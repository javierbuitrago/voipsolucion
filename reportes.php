<?php

require('conexion.php');
	
	$query="SELECT *  FROM clientes";
	
	$resultado=$mysqli->query($query);
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
</head>
<body>
<div id="contsecundario">
            <fieldset>
                <h1>Reportes</h1>
                    ul>a
                <table id="ver-clientes">
                    <thead>
                       <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Barrio</th>
                            <th>Tel ó Cel.</th>
                            <th>Notas</th>
                            <th colspan="5" align="center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php while($row=$resultado->fetch_assoc()){?>
                       
                        <tr>
                              <td><?php echo $row['nombre'];?></td>
                              <td><?php echo $row['direccion'];?></td>
                              <td><?php echo $row['barrio'];?></td>
                              <td><?php echo $row['telefono'];?></td>
                              <td><?php echo $row['saldo_pte'];?></td>
                              <td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                </table>
                <a onclick="window.location.href='index.php'"><button type="button" name="Inicio" value="text">Inicio</button></a>
                
            </fieldset>
        </div>    
</body>
</html>

