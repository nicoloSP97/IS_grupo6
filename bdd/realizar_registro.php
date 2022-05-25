<?php
include("bdd.php");
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$id_depto=$_POST['dpto'];
$pass=$_POST['contrasena'];
$cod_arrendatario=22;
echo "<br>"."$nombre"."<br>";
echo "$apellido"."<br>";
echo "$rut"."<br>";
echo "$id_depto"."<br>";
echo "$pass"."<br>";
mysqli_query($con,"insert into usuario(nombre,rut,pass,cod_usuario,apellido) values ('$nombre','$rut','$pass','$cod_arrendatario','$apellido')");
mysqli_query($con,"insert into habita(rut,id_depto) values('$rut','$id_depto')");
echo "Arrendatario".$nombre."Registrado Exitosamente en el departamento ".$id_depto;
?>