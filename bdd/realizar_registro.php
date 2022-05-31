<?php
include("bdd.php");
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$id_depto=$_POST['dpto'];
$pass=$_POST['contrasena'];
$cod_arrendatario=22;

$q = "SELECT * from usuario where rut ='$rut'";
$consulta=mysqli_query($con,$q);
$fila=mysqli_num_rows($consulta);
echo $fila;
if($fila==0){
    mysqli_query($con,"insert into usuario(nombre,rut,pass,cod_usuario,apellido) values ('$nombre','$rut','$pass','$cod_arrendatario','$apellido')");
    $aux=mysqli_query($con,"insert into habita(rut,id_depto) values('$rut','$id_depto')");
    if(!$aux){
    ?>
    <?php
    include '..\login\registrar.php';
    ?>
    <h2 style="color:red; text-align:center">Ingrese valores validos</h2>
    <?php
    }
    ?>
    <?php
    include '..\login\registrar.php';
    ?>
    <h2 style="color:red; text-align:center">Usuario registrado Exitosamente</h2>
    <?php
}
else{
    ?>
    <?php
    include '..\login\registrar.php';
    ?>
    <h2 style="color:red; text-align:center">Este usuario ya existe</h2>
    <?php
       
}