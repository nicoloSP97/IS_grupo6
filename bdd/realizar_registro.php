<?php
include("bdd.php");
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$id_depto=$_POST['dpto'];
$pass=$_POST['contrasena'];
$cod_arrendatario=22;

mysqli_query($con,"insert into usuario(nombre,rut,pass,cod_usuario,apellido) values ('$nombre','$rut','$pass','$cod_arrendatario','$apellido')");
echo "listoo";
mysqli_query($con,"insert into habita(rut,id_depto) values('$rut','$id_depto')");
echo "Arrendatario".$nombre."Registrado Exitosamente en el departamento ".$id_depto."<br>";

?>
<button><a href="..\login\login2.php">volver al login</a></button>