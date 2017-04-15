<?php

include('conexion.php');
    //$id=$_POST['id'];
    $nombre=$_POST['nom_pres'];
	$cedula=$_POST['cedula_pres'];
	$email=$_POST['email_pres'];
    $celular=$_POST['celular_pres'];
    $telefono=$_POST['telefono_pres'];
	$usuario=$_POST['usuario'];
    $clave1=$_POST['clave'];
    $clave2=$_POST['confir_clave'];

if($clave1===$clave2){
    $query="INSERT INTO prestamistas (nom_pres, cedula_pres, email_pres, celular_pres, telefono_pres, usuario, clave,) VALUES ('" . $nombre . "','" . $cedula . "', '" . $email . "', '" . $celular . "', '" . $telefono . "', '" . $usuario . "', '" . $clave1 . "',)";
	$mysqli->query($query);
    echo "<script> alert('Prestamista Creado Correctamente');</script>";
}

else{
    echo "<script> alert('La Clave no coincide');</script>";
   
    }

?>


