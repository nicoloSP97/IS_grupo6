<?php
include("bdd.php");
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$id_depto=$_POST['dpto'];
$pass=$_POST['contrasena'];
$cod_arrendatario=22;
$q1 = "SELECT * from usuario where rut ='$rut'";
$consulta=mysqli_query($con,$q1);
$q2="SELECT * FROM departamento where id_depa= $id_depto and estado_depa='disponible'";
$consulta2=mysqli_query($con,$q2);
$fila=mysqli_num_rows($consulta);
$fila2=mysqli_num_rows($consulta2);



if($fila==0 && $fila2==1){
    mysqli_query($con,"insert into usuario(nombre,rut,pass,cod_usuario,apellido) values ('$nombre','$rut','$pass','$cod_arrendatario','$apellido')");
    mysqli_query($con,"insert into habita(rut,id_depa) values('$rut','$id_depto')");
    $q="UPDATE departamento set estado_depa='ocupado' where id_depa=$id_depto";
    mysqli_query($con,$q);
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
    <h2 style="color:red; text-align:center">Este usuario ya existe o departamento ocupado</h2>
    <?php
       
}