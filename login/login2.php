<?php
include("../bdd/bdd.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
    <section class="form-login">
      <h5>Login</h5>
      <h2 class="encabezado"> Bienvenido a EDIFRED</h2>
       <!--boton de registro h ref-->
       <form action="" method="POST">
       <input class="controls" type="text" name="nombre" value="" placeholder="Nombre">
       <input class="controls" type="numb" name="rut" value="" placeholder="Rut">
       <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
       <input class="buttons" type="submit" name="" value="Ingresar">
       </form>
       <form>
            <a href="/grupo06/login/registrar.php">
                <input type="button" class="btn btn-primary w-100" value="Registrar">
             </a>
        </form>
      <!--boton de registro h ref-->

      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>

     

    </section>

  </body>
</html>