<?php
include("bdd.php");
session_start();
$rut=$_POST['rut'];
$pass=$_POST['contrasena'];
$q = "SELECT count(*) as contar from usuario where rut ='$rut' and pass='$pass'";
$consulta=mysqli_query($con,$q);
$array=mysqli_fetch_array($consulta);
if($array['contar']>0){
    $_SESSION['rut']=$rut;
header("Location:..\partes\detallesgastos.php");
}
else{
?>
<?php
include '..\login\login2.php';
?>
<h2 style="color: red; text-align:center">Rut y/o Contraseña incorrectas</h2>

<?php
}

