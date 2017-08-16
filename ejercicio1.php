<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-info"><center>INGRESE SUS DATOS</center></h1>
      <center>
      <form  class="alert alert-danger" method="post">
        Ingrese su Nombre: <br><input type="text" name="nom" value=""><br><br>
        Ingrese su Direccion: <br><input type="text" name="dir" value=""><br><br>
        Ingrese su Telefono: <br><input type="number" name="tel" value="telefono"><br><br>
        <input class="btn btn-primary" type="submit" name="" value="BUSCAR">
      </form>
    </center>
      <?php

      $nom=$_POST['nom'];
      $dir=$_POST['dir'];
      $tel=$_POST['tel'];
      $arrayName = array($nom,$dir,$tel);
      echo "$arrayName[0] $arrayName[1] $arrayName[2] ";

      ?>
   </div>
  </body>
</html>
