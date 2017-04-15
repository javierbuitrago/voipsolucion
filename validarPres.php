<?php
if (empty($_POST['usuario'])) { $u="";} else { $u=$_POST['usuario'];}
if (empty($_POST['clave'])) { $c="";} else { $c=$_POST['clave'];}
$cn=mysqli_connect("97.74.31.142","freenet","Software12#","freenet");

if (!mysql_connect("97.74.31.142","freenet","Software12#")){
echo "No se pudo conectar al Mysql";
}
if (!mysql_select_db("freenet")){
echo "No se pudo conectar a la BD";}
$query= "SELECT * FROM prestamistas WHERE usuario='$u' and clave='$c'";
$resultado=mysqli_query($cn,$query);
 
$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:home.php");
}
else{
    echo "Error en la Autenticación";
}
mysqli_free_result($resultado);
?>