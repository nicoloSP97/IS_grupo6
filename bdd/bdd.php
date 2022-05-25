<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="base1";
$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($con->connect_error){
    die("falló la conexión: " . $conn->connect_error);
}
echo "Conexión satisfactoria."
?>