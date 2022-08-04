<?php
include("bdd.php");
$cod_gasto= $_GET['cod_gasto'];
$q="UPDATE pago_gasto set estado_pago = 'pagado' where cod_gasto=$cod_gasto";
$actualizar=mysqli_query($con,$q);
if($actualizar){
    include "..\partes/pago_user.php";
    ?>
    <h2>Gasto comun pagado Exitosamente</h2>
    <?php
}
?>