<?php

require('conexion.php');
	
	$query="SELECT *  FROM clientes";
	
	$resultado=$mysqli->query($query);
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista De clientes</title>
</head>
<body>
<div id="contsecundario">
            <fieldset>
                <h1>Clientes</h1>
                <table id="ver-clientes">
                    <thead>
                       <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Barrio</th>
                            <th>Tel ó Cel.</th>
                            <th>Notas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>                 
                        </tr>
                    </tbody>
                    
                </table>
                
            </fieldset>
        </div>    
</body>
</html>

