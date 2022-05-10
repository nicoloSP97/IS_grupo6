<?php

$servername = "146.83.194.142:1125";
$username = "usuario6";
$password = "U@er6";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("falló la conexión: " . $conn->connect_error);
}

echo "Conexión satisfactoria."

?>