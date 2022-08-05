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

    <form action="product.php" method="POST">

        <label for="">
            <?php echo $materiales['nombre'];?>
            
        </label>

        <input type="number"><?php echo $materiales['monto_luz']; ?></input>


    <button type="submit">modificar</button>
    </form>

</body>