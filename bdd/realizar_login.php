<?php
include("bdd.php");
session_start();
$rut=$_POST['rut'];
$pass=$_POST['contrasena'];
$q = "SELECT count(*) as contar from usuario where rut ='$rut' and pass='$pass'";
$consulta=mysqli_query($con,$q);
$array=mysqli_fetch_array($consulta);
echo "resultados = ".$array['contar'];
if($array['contar']>0){
    $_SESSION['rut']=$rut;
header("Location:..\partes\detallesgastos.php");
}

?>