<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
    <section class="form-login">
      <h5>Registrate</h5>
      <form action="..\bdd\realizar_registro.php" method="post">
      <input class="controls" type="text" name="nombre" value="" placeholder="Nombre">
      <input class="controls" type="text" name="apellido" value="" placeholder="apellido">
      <input class="controls" type="numb" name="rut" value="" placeholder="Rut">
      <input class="controls" type="numb" name="dpto" value="" placeholder="Numero de departamento">
      <!--  <input class="controls" type="email" name="email" value="" placeholder="Email">  -->
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="" value="Registrar">
      </form>
      
      <p><a href="#">¿Olvidaste tu Contraseña?</a></p>

    </section>

  </body>
</html>
