
    <!-- head -->
    <?php include('../partes/head.php');?>
    <!-- fin head -->

<body>
    <div class="d-flex" id="content-wrapper">

    <!-- sideBar -->
        <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->

    <div class="w-100">

    <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->

<?php
    include '../bdd/bdd.php';
    $query = "SELECT * FROM usuario, habita, departamento, pago_gasto, gasto_comun WHERE habita.rut=usuario.rut AND habita.id_depa=departamento.id_depa
    AND departamento.id_depa=pago_gasto.id_depa AND pago_gasto.cod_gasto=gasto_comun.cod_gasto";
    $consulta_materiales = $conexion->query($query);
?>

<body>
    <br>

    <div>
        

    </div>
</body>



<!DOCTYPE html>
<html lang="en">
    
<body>
    <br>

    <div id="content" class="container">

    <?php
        if($consulta_materiales->num_rows > 0){
            while($materiales= $consulta_materiales->fetch_assoc()){
    ?>

    <div class="card"> <!-- tarjetas -->

        <div class="card-body" style="margin: 20px 20px">
            <h5 class="card-title"><?php echo $materiales['nombre']; ?></h5>
            <p class="card-text"><?php echo 'deuda luz: $'.$materiales['monto_luz'];?></p>
            <p class="card-text"><?php echo 'deuda agua: $'.$materiales['monto_agua'];?></p>
            <p class="card-text"><?php echo 'deuda gas: $'.$materiales['monto_gas'];?></p>
            <p class="card-text"><?php echo 'otras deudas: $'.$materiales['monto_otros'];?></p>
            <p class="card-text"><?php echo 'fecha vencimiento: '.$materiales['fecha_limite'];?></p>
            <a href="../editarGastos/index.php" class="btn btn-outline-info btn-lg btn-block">Modificar deudas</a>
        </div>

    </div><!-- div tarjetas -->
        <br>
    <?php }}?>
            
</div>
    <?php include 'includes/scripts.php' ?>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>