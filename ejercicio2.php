<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <div class="container">
        <h1 class="alert alert-info"><center>ARRAY DE NOMBRES</center></h1>
        <center>
        <form class="alert alert-danger">
     <?php
        $nombre= array('Mirna','Paula','Maira','Jose','Sebastian','Carlos');
        $numero=count($nombre);

        echo "El numero de elementos es: $numero<br><hr>";
        shuffle($nombre);
        foreach ($nombre as $maya) {
          echo "$maya<br>";
        }
     ?>
       <input class="btn btn-primary" type="submit" name="" value="ACTUALIZAR">
       </form>
     </center>
    </div>
  </body>
</html>
